<?php
/* Smarty version 3.1.30, created on 2018-03-28 17:21:44
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Admin\View\User\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abb5ea8407420_41472753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cd57176c46f37347d76dd1d4c349b51fdb500b9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Admin\\View\\User\\index.html',
      1 => 1520588172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5abb5ea8407420_41472753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20295022605abb5ea83c7802_83011832', 'style1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8873633895abb5ea8405149_19231267', 'right');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style1'} */
class Block_20295022605abb5ea83c7802_83011832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	background-color: #92c609;
	border-radius: 4px;
<?php
}
}
/* {/block 'style1'} */
/* {block 'right'} */
class Block_8873633895abb5ea8405149_19231267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="right">
        <div class="location">
                <strong>你现在所在的位置是:</strong>
                <span>用户管理页面</span>
            </div>
            <form action="index.php?c=user&a=index" method="post">
            <div class="search">
                <span>请输入用户的名称或电话：</span>
                <input type="text" name="search" placeholder="请输入用户的名称或电话"/>
                
                <span>状态：</span>
                <select name="status" >
                    <option value="">--请选择--</option>
                    <option value="1">开启</option>
                    <option value="2">锁定</option>
                </select>

                <input type="submit" style="width: 80px;" value="查询"/>
                <a href="./index.php?c=user&a=add">添加用户</a>
            </div>
            </form>
            <table class="providerTable" cellpadding="0" cellspacing="0">
                <tr class="firstTr">
                    <th width="10%">ID</th>
		            <th width="20%">用户昵称</th>
		            <th width="20%">用户状态</th>
		            <th width="30%">用户电话</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['v']->value['status']];?>
</td>
            		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                    <td>
                        <a href="./index.php?c=user&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="Public/img/xiugai.png" alt="修改" title="修改"/></a>
                        <a href="./index.php?c=user&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="removeBill"><img src="Public/img/schu.png" alt="删除" title="删除"/></a>
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
            		<a href="index.php?c=user&a=index&p=1&<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><li>首页</li></a>
            		<a href="index.php?c=user&a=index&p=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
&<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><li>上一页</li></a>
            		<a href="index.php?c=user&a=index&p=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
&<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><li>下一页</li></a>
            		<a href="index.php?c=user&a=index&p=<?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
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
