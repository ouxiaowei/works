<?php
/* Smarty version 3.1.30, created on 2018-03-07 11:34:14
  from "D:\xampp\htdocs\month05\week02\day03\MyBlog\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9fc0266b24d5_65965761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42eb013c9e8ac80a23af136c7fe69d16d6b7818e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day03\\MyBlog\\Home\\View\\Index\\index.html',
      1 => 1520418715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5a9fc0266b24d5_65965761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11292802905a9fc0266aef51_02555075', 'style1');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style1'} */
class Block_11292802905a9fc0266aef51_02555075 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style1'} */
}
