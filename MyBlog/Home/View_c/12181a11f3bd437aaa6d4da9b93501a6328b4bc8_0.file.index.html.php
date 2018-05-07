<?php
/* Smarty version 3.1.30, created on 2018-03-06 11:58:57
  from "D:\xampp\htdocs\month05\week02\day02\MyBlog\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e7471d80436_85370830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12181a11f3bd437aaa6d4da9b93501a6328b4bc8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day02\\MyBlog\\Home\\View\\Index\\index.html',
      1 => 1520333934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5a9e7471d80436_85370830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21285714255a9e7471d71873_75219464', 'style1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10994695115a9e7471d7ef22_86605630', 'login');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style1'} */
class Block_21285714255a9e7471d71873_75219464 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style1'} */
/* {block 'login'} */
class Block_10994695115a9e7471d7ef22_86605630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	欢迎  <a href="#"><?php echo $_SESSION['h_username'];?>
</a>&nbsp&nbsp
	
     | <a href="./index.php?c=login&a=doLogout">退出</a> 
    
<?php
}
}
/* {/block 'login'} */
}
