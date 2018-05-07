<?php
	class ArticleController extends Controller{
		//商品
		public function add(){
			echo "添加商品信息页面";
		}
		
		public function insert(){
			echo "添加商品名字";
		}
		
		public function index(){
			$article=new Modle('article');
			
			//=====分页=========
			$pageSize=4;
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

			$this->display('./Article/index.html');
			
			
		}
		
		public function delete(){
			echo "删除商品信息";
		}
		
		public function update(){
			echo "修改商品信息";
		}
		
		public function select(){
			echo "";
		}
	}
?>