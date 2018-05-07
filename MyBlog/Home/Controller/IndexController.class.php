<?php
	class IndexController extends Controller{
		//商品
		public function index(){
			//随机轮播图
			$arr=array('01','02','03','04','05','06','07','08','09','10');
			$random_keys=array_rand($arr,2);
			$one=$arr[$random_keys[0]];
			$two=$arr[$random_keys[1]];
			
			$article=new Modle('article');
			
			//=====分页=========
			$pageSize=6;
			$page=$_GET['p'] ?? 1;
			
			$maxRows=$article->query("select count(id) as num from article")[0]['num'];
			$maxPage=ceil($maxRows / $pageSize);
			
			if($page>$maxPage){
				$page=$maxPage;
			}
			if($page<1){
				$page=1;
			}
			$limit="";
			$limit=" limit ".($page-1)*$pageSize.",".$pageSize." ";
			$data=$article->query("select id,title,picture,author,intro,keywords,click_num,reply_num,insert_at from article order by insert_at desc".$limit);
			
			
			$this->assign('page',$page);
			$this->assign('maxPage',$maxPage);
			$this->assign('one',$one);
			$this->assign('two',$two);
			$this->assign('article',$article);
			$this->assign('data',$data);
			$this->display('./Index/index.html');
			
		}
		
		public function logout(){
			$article=new Modle('article');
			$data=$article->field("title,picture,author,details,keywords,click_num,insert_at")->select();
			$this->assign('data',$data);
			$this->display('./Layouts/index.html');
		}
		
		public function delete(){
			echo "删除商品信息";
		}
		
	}
?>