<?php
/* Smarty version 3.1.30, created on 2018-03-28 17:20:47
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Admin\View\Login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abb5e6f2e1e95_11036536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1ca5cda1c2f2dbdef695c1af629b2cf46844fc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Admin\\View\\Login\\index.html',
      1 => 1520667608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abb5e6f2e1e95_11036536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>系统登录 - 用户管理系统</title>
    <link rel="stylesheet" href="./Public/css/style.css"/>
</head>
<body class="login_bg">
    <section class="loginBox">
        <header class="loginHeader">
            <h1>用户管理系统</h1>
        </header>
        <section class="loginCont">
            <form class="loginForm" action="index.php?c=login&a=doLogin" method="post">
                <div class="inputbox">
                    <label for="user">用户名：</label>
                    <input id="user" type="text" name="username" placeholder="请输入用户名" required/>
                </div>
                <div class="inputbox">
                    <label for="mima">密码：</label>
                    <input id="mima" type="password" name="password" placeholder="请输入密码" required/>
                </div>
                <div class="inputbox">
                    <label for="mima" style=" vertical-align: middle;">密码：</label>
                    <input id="mima" style="width: 30%; vertical-align: middle;" type="password" name="code" placeholder="请输入验证码" required/><img src="./index.php?c=login&a=code" style="vertical-align: middle;margin-left: 15px;" onclick="this.src='./index.php?c=login&a=code&id'+Math.random(0,1)" />
                </div>
                <div class="subBtn">
                    <input type="submit" value="登录" />
                    <input type="reset" value="重置"/>
                </div>

            </form>
        </section>
    </section>

</body>
</html><?php }
}
