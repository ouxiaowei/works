<?php
/* Smarty version 3.1.30, created on 2018-03-29 21:12:44
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Home\View\Heart\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abce64cd08fa1_66236820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33cc7208923de4ce8c94b3b4a0e4595f26af48fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Home\\View\\Heart\\index.html',
      1 => 1522329162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5abce64cd08fa1_66236820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10710977395abce64cce7a84_30455512', 'style3');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8979341195abce64cd07747_59243695', 'main');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style3'} */
class Block_10710977395abce64cce7a84_30455512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style3'} */
/* {block 'main'} */
class Block_8979341195abce64cd07747_59243695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="breadcrumb">
    <div class="container"><i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span> <span class="c-gray">碎言碎语</span></div>
</nav>

<section class="container mt-20">
    <div class="container-fluid">
        <div class="timeline">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h4>
					        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['contents'];?>
</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date"><?php echo $_smarty_tpl->tpl_vars['v']->value['insert_at'];?>
</span>
					    </div>
					</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
        </div>
    </div>

</section>
<?php
}
}
/* {/block 'main'} */
}
