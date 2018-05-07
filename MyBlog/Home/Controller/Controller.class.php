<?php
	class Controller extends Smarty{
		public function __construct(){
			parent::__construct();
						
			$this->template_dir="./View";
			$this->compile_dir="./View_c";
			
			$arti=new Modle('article');
			$result=$arti->query('select id,title,reply_num from article order by reply_num desc limit 5 ');
			$result1=$arti->query('select id,title,click_num from article order by click_num desc limit 5 ');
			//var_dump($result);
			$this->assign('result',$result);
			$this->assign('result1',$result1);
			$this->assign('arti',$arti);
			
			
		}
		
		public function success($message,$url,$seconds){
			
			$this->assign('message',$message);
			$this->assign('url',$url);
			$this->assign('seconds',$seconds);
			
			$this->display('success.html');
		}
		
		public function error($message,$url,$seconds){
			
			$this->assign('message',$message);
			$this->assign('url',$url);
			$this->assign('seconds',$seconds);
			
			$this->display('error.html');	
			
		}
		
		
		
	}
	
	
?>