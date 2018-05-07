<?php
	class DetailController extends Controller{
		
		public function index(){
			//查询文章内容
			$id=$_GET['id'];
			$article=new Modle('article');
			$article->query('update article set click_num=click_num+1 where id='.$id);
			$data=$article->field("id,title,author,details,keywords,click_num,insert_at")->where('id='.$id)->select();
			
			$data=$data[0];
			
			//查询回复内容并排序
			$rep=new Modle('reply');
			$res=$rep->query('select r.reply_at,r.reply_contents,u.nickname from reply r,users u where r.aid='.$id.' && r.uid=u.id order by r.reply_at desc');
//			var_dump($data);
//			var_dump($res);
			$this->assign('id',$id);
			$this->assign('data',$data);
			$this->assign('res',$res);
			$this->display('./Detail/index.html');
		}
		
		public function doReply(){
			if(!empty($_SESSION['h_uid'])){
				// var_dump($_SESSION['h_uid']);
				$rep=new Modle('reply');
				$data=$_POST;
				$res=$rep->add($data);
				$id=$_GET['id'];
				if($res){
					$this->success("回复成功", 'index.php?c=detail&a=index&id='.$id, 2);
				}else{
					$this->error("回复失败", 'index.php?c=detail&a=index&id='.$id, 2);
				}
			}else{
				$this->error("回复请登录", 'index.php?c=login&a=doLogin', 2);
			}
		}
		
	}
?>