<?php
/* Smarty version 3.1.30, created on 2018-03-31 13:29:28
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Home\View\About\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abf1cb8e91633_94841198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91edff34d602b45a0d2632753c95f07ed6b44923' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Home\\View\\About\\index.html',
      1 => 1522474160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5abf1cb8e91633_94841198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2849391555abf1cb8e83e38_12590678', 'style2');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1588983285abf1cb8e8dca5_41732411', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style2'} */
class Block_2849391555abf1cb8e83e38_12590678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style2'} */
/* {block 'main'} */
class Block_1588983285abf1cb8e8dca5_41732411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="breadcrumb">
    <div class="container"> <i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">关于</span> </div>
</nav>

<section class="container">
    <div class="container-fluid">
        <div class="about">
            <h2>About me</h2>
            <ul>
                <p>一枚正在努力进步的javaWeb程序员。专长领域为Web开发、服务器端开发，目前正在向全栈工程师进发。。。</p>
            </ul>
            <h2>My blog</h2>
            <ul>
                <p>博客记录自己的成长经历，分享心得</p>
                <p>本站定位为IT技术博客站，博客内容主要涉及编程语言、前端开发、服务端开发及一些热门技术等方面，同时分享实用的学习和开发资料。</p>
            </ul>
            <h2>Contact  me</h2>
            <ul>
                <p><i class="Hui-iconfont">&#xe67b;</i>qq :511969282</p>
                <p><i class="Hui-iconfont">&#xe6d1;</i>git：<a href="https://ouxiaowei.github.io/" class="blog_link" >https://ouxiaowei.github.io/</a></p>
                <p><i class="Hui-iconfont">&#xe63b;</i>email : <a class="blog_link" href="##">511969282@qq.com</a></p>
            </ul>
        </div>

    </div>
</section>

<?php
}
}
/* {/block 'main'} */
}
