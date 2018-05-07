<?php
	class IndexController extends Controller{
		//商品
		public function add(){
			echo "添加商品信息页面";
		}
		
		public function insert(){
			echo "添加商品名字";
		}
		
		public function index(){
			error_reporting(E_ALL ^ E_NOTICE);
			if($_SESSION['username']==null){
				$this->error("对不起，请登录", "./index.php?c=login&a=index", 3);
				die;
			};
			$this->display('./Index/index.html');
			
			
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