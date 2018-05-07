<?php
/* Smarty version 3.1.30, created on 2018-03-10 10:45:39
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Admin\View\Layouts\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa3a9435cfac1_34203198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9693322062356735e514207704b5aca751512872' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Admin\\View\\Layouts\\index.html',
      1 => 1520588172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa3a9435cfac1_34203198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>超市账单管理系统</title>
    <link rel="stylesheet" href="./Public/css/public.css"/>
    <link rel="stylesheet" href="./Public/css/style.css"/>
</head>
<body>
<!--头部-->
<header class="publicHeader">
    <h1>用户管理系统</h1>

    <div class="publicHeaderR">
        <p><span id="hours">下午好！</span><span style="color: #fff21b"><?php echo $_SESSION['username'];?>
</span> , 欢迎你！</p>
        <a href="./index.php?c=login&a=doLogout">退出</a>
    </div>
</header>
<!--时间-->
<section class="publicTime">
    <span id="time">2015年1月1日 11:11  星期一</span>
    <a href="#">温馨提示：为了能正常浏览，请使用高版本浏览器！（IE10+）</a>
</section>
<!--主体内容-->
<section class="publicMian">
    <div class="left">
        <h2 class="leftH2"><span class="span1"></span>功能列表 <span></span></h2>
        <nav>
            <ul class="list">
                <li style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5599462065aa3a9435c1c89_15034329', 'style1');
?>
"><a href="./index.php?c=user&a=index">用户管理</a></li>
                <li style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20812991235aa3a9435c5f16_50190066', 'style2');
?>
"><a href="./index.php?c=article&a=index">文章管理</a></li>
                <li style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1703457195aa3a9435c9c56_46635097', 'style3');
?>
"><a href="./index.php?c=heart&a=index">心情管理</a></li>
                <!--<li><a href="password.html">密码修改</a></li>
                <li><a href="login.html">退出系统</a></li>-->
            </ul>
        </nav>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5924332305aa3a9435ce0c0_12744861', 'right');
?>

</section>
<footer class="footer">
</footer>
<?php echo '<script'; ?>
 src="./Public/js/time.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'style1'} */
class Block_5599462065aa3a9435c1c89_15034329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style1'} */
/* {block 'style2'} */
class Block_20812991235aa3a9435c5f16_50190066 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style2'} */
/* {block 'style3'} */
class Block_1703457195aa3a9435c9c56_46635097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style3'} */
/* {block 'right'} */
class Block_5924332305aa3a9435ce0c0_12744861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="right">
        <img class="wColck" src="img/clock.jpg" alt=""/>
        <div class="wFont">
            <h2>Admin</h2>
            <p>欢迎来到用户管理系统!</p>
        </div>
    </div>
    <?php
}
}
/* {/block 'right'} */
}
