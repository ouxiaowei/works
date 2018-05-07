<?php
	class Controller extends Smarty{
		public function __construct(){
			parent::__construct();
						
			$this->template_dir="./View";
			$this->compile_dir="./View_c";
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