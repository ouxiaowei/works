<?php
/* Smarty version 3.1.30, created on 2018-03-29 20:49:33
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Home\View\Article\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abce0dd7fe940_83116061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7e81a8e8c4bbdd033cff62483e41dedbcb8c49' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Home\\View\\Article\\index.html',
      1 => 1522327764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5abce0dd7fe940_83116061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17244034815abce0dd7a8294_36578806', 'style4');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17128425915abce0dd7fc089_55139481', 'main');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style4'} */
class Block_17244034815abce0dd7a8294_36578806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style4'} */
/* {block 'main'} */
class Block_17128425915abce0dd7fc089_55139481 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="breadcrumb">
    <div class="container">
        <i class="Hui-iconfont">&#xe67f;</i><a href="/" class="c-primary">首页</a>
        <span class="c-gray en">&gt;</span> <a href="/article" class="c-primary">学无止尽</a>
        <span class="c-gray en">&gt;</span> <span class="c-gray"><i class="Hui-iconfont">&#xe64b;</i> nginx</span>
    </div>
</nav>

<section class="container">
  <!--left-->
  <div class="col-sm-9 col-md-9 mt-20">
  		
  	<!--article list-->
			<ul class="index_arc">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
				<li class="index_arc_item">
					<a href="../Public/Admin/Uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" class="pic">
						<img class="lazyload" src="../Public/Admin/Uploads/s_<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt="应该选" />
					</a>
					<h4 class="title"><a href="./index.php?c=detail&a=index&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h4>
					<div class="date_hits">
						<span><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</span>
						<span><?php echo $_smarty_tpl->tpl_vars['v']->value['insert_at'];?>
</span>
						<span><a href="/article-lists/10.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['keywords'];?>
</a></span>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i><?php echo $_smarty_tpl->tpl_vars['v']->value['click_num'];?>
° </p>
						<p class="commonts"><i class="Hui-iconfont" title="点击量">&#xe622;</i> <span class="cy_cmt_count"><?php echo $_smarty_tpl->tpl_vars['v']->value['reply_num'];?>
</span></p>
					</div>
					<div class="desc"><?php echo $_smarty_tpl->tpl_vars['v']->value['intro'];?>
</div>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ul>
			<div class="page">
	        	<ul>
	        		<a href="#"><li>共<?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
页/第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</li></a>
	        		<a href="index.php?c=index&a=index&p=1"><li>首页</li></a>
	        		<a href="index.php?c=index&a=index&p=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><li>上一页</li></a>
	        		<a href="index.php?c=index&a=index&p=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><li>下一页</li></a>
	        		<a href="index.php?c=index&a=index&p=<?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
"><li>尾页</li></a>
	        	</ul>
	        </div>
  </div>
  
  <!--right-->
  <div class="col-sm-3 col-md-3 mt-20">
  	
  	<!--博主信息-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>博主信息</strong></a>
            </div>
            <div class="tab-category-item">
                <ul class="index_recd">
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe653;</i>姓名：OXW</li>
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe70d;</i>职业：Web开发</li>
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe63b;</i>邮箱：<a href="mailto:511969282@qq.com">511969282@qq.com</a></li>
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe671;</i>定位：浙江 &middot; 杭州</li>
                </ul>
            </div>
        </div>
  	
  	<!--热门推荐-->
  		<div class="bg-fff box-shadow radius mb-20">
    		<div class="tab-category">
    			<a href=""><strong>热门推荐</strong></a>
    		</div>
    		<div class="tab-category-item">
    			<ul class="index_recd">
    				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    				<li>
    					<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
    					<p class="hits"><i class="Hui-iconfont" title="回复量">&#xe622;</i> <?php echo $_smarty_tpl->tpl_vars['v']->value['reply_num'];?>
 </p>
    				</li>
    				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    			</ul>
    		</div>
    	</div>
  </div>
  
</section>
    <?php
}
}
/* {/block 'main'} */
}
