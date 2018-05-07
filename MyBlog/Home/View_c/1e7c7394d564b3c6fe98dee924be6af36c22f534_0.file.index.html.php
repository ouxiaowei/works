<?php
/* Smarty version 3.1.30, created on 2018-03-10 09:32:06
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa3980694daf1_11884658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7c7394d564b3c6fe98dee924be6af36c22f534' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Home\\View\\Index\\index.html',
      1 => 1520588173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa3980694daf1_11884658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16182994435aa3980694add0_37878693', 'style1');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style1'} */
class Block_16182994435aa3980694add0_37878693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style1'} */
}
