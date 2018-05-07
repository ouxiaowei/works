<?php
	class AboutController extends Controller{
		//商品
		public function add(){
			echo "添加商品信息页面";
		}
		
		public function insert(){
			echo "添加商品名字";
		}
		
		public function index(){
			
			$this->display('./About/index.html');
			
			
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