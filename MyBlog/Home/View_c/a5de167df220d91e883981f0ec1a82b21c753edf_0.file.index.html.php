<?php
/* Smarty version 3.1.30, created on 2018-03-08 03:29:03
  from "D:\xampp\htdocs\month05\week02\day03\MyBlog\Home\View\About\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa09fef7a9743_68190838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5de167df220d91e883981f0ec1a82b21c753edf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day03\\MyBlog\\Home\\View\\About\\index.html',
      1 => 1520420453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa09fef7a9743_68190838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15795461825aa09fef79ecd5_37386503', 'style2');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5619027285aa09fef7a72d6_62018012', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style2'} */
class Block_15795461825aa09fef79ecd5_37386503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style2'} */
/* {block 'main'} */
class Block_5619027285aa09fef7a72d6_62018012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="breadcrumb">
    <div class="container"> <i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">关于</span> </div>
</nav>

<section class="container">
    <div class="container-fluid">
        <div class="about">
            <h2>Just about me</h2>
            <ul>
                <p>一枚正在努力进步的javaWeb程序员。专长领域为Web开发、服务器端开发，目前正在向全栈工程师进发。。。</p>
            </ul>
            <h2>About my blog</h2>
            <ul>
                <p>域  名：wfyvv.com 注册于2017年02月02日</p>
                <p>服务器：腾讯云服务器 ，于2017年02月23日完成备案</p>
                <p>备案号：皖ICP备17002922号</p>
                <p>本站定位为IT技术博客站，博客内容主要涉及编程语言、前端开发、服务端开发及一些热门技术等方面，同时分享实用的学习和开发资料。</p>
            </ul>
            <h2>Contact  me</h2>
            <ul>
                <p><i class="Hui-iconfont">&#xe67b;</i>qq : *********暂不公开 : (</p>
                <p><i class="Hui-iconfont">&#xe6d1;</i>git：<a href="https://git.oschina.net/wilco" class="blog_link" >https://git.oschina.net/wilco</a></p>
                <p><i class="Hui-iconfont">&#xe63b;</i>email : <a class="blog_link" href="mailto:wfyv@qq.com">wfyv@qq.com</a></p>
            </ul>
        </div>

    </div>
</section>

<?php
}
}
/* {/block 'main'} */
}
