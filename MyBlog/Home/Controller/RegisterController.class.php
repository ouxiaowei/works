<?php
	class RegisterController extends Controller{
		
		public function index(){
			
			$this->display('./Register/index.html');
			
		}
		
		public function doRegister(){
			//判断验证码是否正确
			var_dump($_POST);
			var_dump($_SESSION['h_code']);
			var_dump($_POST['code']);
			$username=$_POST['nickname'];
			
			if($_POST['code']!=$_SESSION['h_code']){
				$this->error("验证码错误", "index.php?c=register&a=index", 2);
				die;
			}
			
			//判断用户是否注册
			$users=new Modle('users');
			
			$res=$users->where("nickname='".$username."'")->select();
			
			//var_dump($res);
			
			if($res!=false){
				$this->error("该用户已存在！", "./index.php?c=register&a=index", 2);
				die;
			};
			
			//验证手机号码格式
			preg_match("/^1[34578]\d{9}$/", $_POST['phone'],$h_phone);
			if($h_phone==null){
				$this->error("请输入正确的手机格式！", "./index.php?c=register&a=index", 2);
				die;
			}
			
			//var_dump($h_phone);
			//判断手机是否注册
			$res1=$users->where("phone='".$_POST['phone']."'")->select();
			
			//var_dump($res);
			
			if($res1!=false){
				$this->error("该手机号已被注册！", "./index.php?c=register&a=index", 2);
				die;
			};
			
			//执行注册操作
			unset($_POST['code']);
			$_POST['password']=md5($_POST['password']);
			$res2=$users->add($_POST);
			if($res2){
				$this->success("注册成功，请登录！", "./index.php?c=login&a=index", 2);
			}else{
				$this->error("发生错误，注册失败！", "./index.php?c=register&a=index", 2);
			}
		}
	}
?>