<?php
/* Smarty version 3.1.30, created on 2018-03-07 03:07:39
  from "D:\xampp\htdocs\month05\week02\day03\MyBlog\Home\View\Login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f496b998b65_04221659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd2e219a6035e64121b207dfefab7a7a3273220' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day03\\MyBlog\\Home\\View\\Login\\index.html',
      1 => 1520388267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9f496b998b65_04221659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			无标题文档
		</title>
		<link rel="stylesheet" href="./Public/css/dome.css">
		<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js">
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js">
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="box">
			<div class="cnt">
				<p id="huanying">
					<span id="cnt_one">
						欢迎登录
					</span>
					<span id="cnt_two">
						<a href='./index.php?c=register&a=index'><b>用户注册</b></a>
					</span>
				</p>
				<hr />
				<div style="padding-bottom:20px;">
					<label class="checkbox-inline" style="padding-left:0px;color:blue;padding-right:10px;">
						<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1"
						checked>
						普通用户
					</label>
					<label class="checkbox-inline" style="padding-right:10px;">
						<input type="radio" name="optionsRadiosinline" id="optionsRadios4" value="option2">
						管理员
					</label>
				</div>
				<div>
					<form class="bs-example bs-example-form" role="form"action="index.php?c=login&a=dologin" method="post">
						<div class="input-group">
							<span class="input-group-addon">
								<img src="./Public/img/未标题-1_03.png">
							</span>
							<input type="text" class="form-control" name="username" placeholder="请输入您的账号">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">
								<img src="./Public/img/suo.png">
							</span>
							<input type="password" class="form-control" name="password" placeholder="请输入您的密码">
						</div>
						<br>
						<div class="input-group" style="position:absolute;">
							<input type="text" class="form-control" name="code" placeholder="请输入验证码" style="position:relative;width:191px;height:33px;">
							<img src="./index.php?c=login&a=code" onclick="this.src='./index.php?c=login&a=code&id='+Math.random(0,1)" style="margin-left:-22px;" id="oimg">
						</div>
						<br>
						<div style="margin-top:40px;">
							<input class="form-control btn btn-info" type="submit" value="登录预约体检"/>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</body>

</html><?php }
}
