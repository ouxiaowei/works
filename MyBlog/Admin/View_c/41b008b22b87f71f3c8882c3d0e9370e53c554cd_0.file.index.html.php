<?php
/* Smarty version 3.1.30, created on 2018-03-10 10:45:39
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Admin\View\Article\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa3a9435aa222_21983368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b008b22b87f71f3c8882c3d0e9370e53c554cd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Admin\\View\\Article\\index.html',
      1 => 1520669936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa3a9435aa222_21983368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12968400635aa3a943555521_70374820', 'style2');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20608171825aa3a9435a8203_90394492', 'right');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style2'} */
class Block_12968400635aa3a943555521_70374820 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	background-color: #92c609;
	border-radius: 4px;
<?php
}
}
/* {/block 'style2'} */
/* {block 'right'} */
class Block_20608171825aa3a9435a8203_90394492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>文章管理页面</span>
        </div>
        <form action="index.php?c=article&a=index" method="post">
        <div class="search">
            <span>作者或标题：</span>
            <input type="text" name="search" placeholder="请输入作者或标题"/>
            <input type="submit" style="width: 80px;" value="查询"/>
            <a href="./index.php?c=article&a=add">添加文章</a>
        </div>
        </form>
        <!--供应商操作表格-->
        <table class="providerTable" cellpadding="0" cellspacing="0">
            <tr class="firstTr">
                <th width="10%">ID</th>
                <th width="10%">文章标题</th>
                <th width="10%">文章作者</th>
                <th width="10%">文章简介</th>
                <th width="20%">文章配图</th>
                <th width="10%">关键字</th>
                <th width="10%">添加时间</th>
                <th width="20%">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['intro'];?>
</td>
                <td><a href="../Public/Admin/Uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" target="_blank"><img src="../Public/Admin/Uploads/s_<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" style="width: 80px;"/></a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['keywords'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['insert_at'];?>
</td>
                <td>
                    <a href="./index.php?c=article&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="./Public/img/xiugai.png" alt="修改" title="修改"/></a>
                    <a href="./index.php?c=article&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="removeProvider}"><img src="./Public/img/schu.png" alt="删除" title="删除"/></a>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
		<div class="page" style="border: 1px solid gray;">
        	<ul>
        		<a href="#"><li>共<?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
页/第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</li></a>
        		<a href="index.php?c=article&a=index&p=1&<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><li>首页</li></a>
        		<a href="index.php?c=article&a=index&p=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
&<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><li>上一页</li></a>
        		<a href="index.php?c=article&a=index&p=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
&<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><li>下一页</li></a>
        		<a href="index.php?c=article&a=index&p=<?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><li>尾页</li></a>
        	</ul>
        </div>
    </div>
    <?php
}
}
/* {/block 'right'} */
}
