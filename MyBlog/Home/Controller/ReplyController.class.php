<?php
	class ReplyController extends Controller{
		//商品
		
		public function doReply(){
			if(!empty($_SESSION['h_uid'])){
				$rep=new Modle('auth_re');
				$data=$_POST;
				$res=$rep->add($data);
				if($res){
					$this->success("回复成功", 'index.php?c=reply&a=index', 2);
				}else{
					$this->error("回复失败", 'index.php?c=reply&a=index', 2);
				}
			}else{
				$this->error("回复请登录", 'index.php?c=login&a=doLogin', 2);
			}
		}
		
		public function doReply_n(){
			if(!empty($_SESSION['h_uid'])){
				$rep=new Modle('next_re');
				$_POST['nau_id']=$_GET['nau_id'];
				$data=$_POST;
				// var_dump($data);
				$res=$rep->add($data);
				if($res){
					$this->success("回复成功", 'index.php?c=reply&a=index', 2);
				}else{
					$this->error("回复失败", 'index.php?c=reply&a=index', 2);
				}
			}else{
				$this->error("回复请登录", 'index.php?c=login&a=doLogin', 2);
			}
		}

		public function index(){
			$auth_re=new Modle('auth_re');
			$next_re=new Modle('next_re');
			$res=$auth_re->query('select r.reply_at,r.id,r.reply_contents,u.nickname from auth_re r,users u where r.uid_re=u.id order by r.reply_at desc');
			$data=$next_re->query('select r.reply_at,r.reply_contents,r.re_id,u.nickname from next_re r,users u where r.nau_id=u.id order by r.reply_at desc');
			// var_dump($data);
			$this->assign('res',$res);
			$this->assign('data',$data);
			$this->display('./Reply/index.html');
		}
		
	}
?>