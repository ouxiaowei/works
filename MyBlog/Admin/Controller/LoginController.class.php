<?php
	class LoginController extends Controller{
		
		public function index(){
			
			$this->display('./Login/index.html');
			
		}
		
		public function code(){
			$vcode=new Vcode();
			
			
			$vcode->doimg();
			//缓存验证码
			$code=$vcode->getCode();
			$_SESSION['code']=$code;
			
			//$_SESSION['id']=$_POST['id'];
			
			//var_dump($_SESSION['code']);
		}
		
		public function doLogin(){
//			var_dump($_POST);
//			var_dump($_SESSION['code']);
			
			if($_POST['code']!=$_SESSION['code']){
				$this->error('验证码错误', './index.php?c=login&a=index', 3);
				die;
			}
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$users=new Modle('users');
			
			$res=$users->where("nickname='".$username."' && password='".md5($password)."'")->select();
			
//			var_dump($_SESSION['uid']);
//			var_dump($res[0]['id']);
			
			if($res!=false){
				$_SESSION['uid']=$res[0]['id'];
				$_SESSION['username']=$res[0]['nickname'];
				$this->success("恭喜登录成功", './index.php?c=index&a=index', 3);
			}else{
				$this->error("登录失败", './index.php?c=login&a=index', 3);
				
			}
		}
		
		public function doLogout(){
			unset($_SESSION['username']);
			unset($_SESSION['uid']);
			
			$this->success("退出成功", './index.php?c=login&a=index', 3);
			
		}
	}
	
?>