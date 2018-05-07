<?php
	class LoginController extends Controller{
		
		//加载登录首页
		public function index(){
			
			$this->display('./Login/index.html');
			
			
		}
		
		//验证码调用模板
		public function code(){
			$vcode=new Vcode();
			
			$vcode->doimg();
			$code=$vcode->getCode();
			
			$_SESSION['h_code']=$code;
			
		}

		//进行登录验证
		public function doLogin(){
//			var_dump($_POST);
//			var_dump($_SESSION['h_code']);
			
			if($_POST['code']!=$_SESSION['h_code']){
				$this->error('验证码错误', './index.php?c=login&a=index', 3);
				die;
			}
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$users=new Modle('users');
			
			$res=$users->where("nickname='".$username."' && password='".md5($password)."'")->select();
//			var_dump($res);
//			var_dump($_SESSION['uid']);
//			var_dump($res[0]['id']);
			
			if($res!=false){
				$_SESSION['h_uid']=$res[0]['id'];
				$_SESSION['h_username']=$res[0]['nickname'];

				$this->success("恭喜登录成功", './index.php?c=index&a=index', 3);
			}else{
				$this->error("登录失败", './index.php?c=login&a=index', 3);
				
			}
		}
		
		//退出登录，销毁session
		public function doLogout(){
			unset($_SESSION['h_username']);
			unset($_SESSION['h_uid']);
			$_SESSION['h_username']=null;
			$this->success("退出成功", './index.php?c=index&a=index', 3);
			
		}
	}
?>