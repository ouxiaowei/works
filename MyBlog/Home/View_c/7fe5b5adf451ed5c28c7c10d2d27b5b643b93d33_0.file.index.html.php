<?php
/* Smarty version 3.1.30, created on 2018-03-28 17:47:28
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Home\View\Detail\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abb64b01a8788_34579412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fe5b5adf451ed5c28c7c10d2d27b5b643b93d33' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Home\\View\\Detail\\index.html',
      1 => 1522230445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5abb64b01a8788_34579412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20970688515abb64b0139721_80989198', 'style1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6302781845abb64b019ed30_34923895', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12912517345abb64b01a6bd4_67763690', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style1'} */
class Block_20970688515abb64b0139721_80989198 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style1'} */
/* {block 'main'} */
class Block_6302781845abb64b019ed30_34923895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<nav class="breadcrumb">
	  <div class="container"> <i class="Hui-iconfont">&#xe67f;</i> <a href="index.php?c=index&a=index" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">文章详情</span> <span class="c-gray en">&gt;</span>  <span class="c-gray"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</span></div>
	</nav>

	<section class="container pt-20">
	
	<div class="row w_main_row">
				
				<div class="col-lg-9 col-md-9 w_main_left">
					<div class="panel panel-default  mb-20">
						<div class="panel-body pt-10 pb-10">
							<h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h2>
							<p class="box_c"><span class="d_time">发布时间：<?php echo $_smarty_tpl->tpl_vars['data']->value['insert_at'];?>
</span><span>编辑：<a href="mailto:wfyv@qq.com"><?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</a></span><span>阅读（<?php echo $_smarty_tpl->tpl_vars['data']->value['click_num'];?>
）</span></p>
							<ul class="infos">
								      <p><?php echo $_smarty_tpl->tpl_vars['data']->value['details'];?>
</p>
							</ul>
															
							<div class="keybq">
						    	<p><span>关键字</span>：<a class="label label-default"><?php echo $_smarty_tpl->tpl_vars['data']->value['keywords'];?>
</a></p>    
						    </div>
							
							<div class="nextinfo">
								<p class="last">上一篇：<a href="#">免费收录网站搜索引擎登录口大全</a></p>
								<p class="next">下一篇：<a href="#">javascript显示年月日时间代码</a></p>
						    </div>
							
						</div>
					</div>
					
					<div class="panel panel-default  mb-20">
						<div class="tab-category">
                <a href=""><strong>评论区</strong></a>
            </div>
						<div class="panel-body">
							<div class="panel-body" style="margin: 0 3%;">
                    <div class="mb-20">
                    	<ul class="commentList">
                    		<?php if ($_smarty_tpl->tpl_vars['res']->value == null) {?>
                    			目前还没有沙发，赶快抢沙发吧
                    		<?php } else { ?>
                    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="http://qzapp.qlogo.cn/qzapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/100"></i></a>
                                <div class="comment-main">
                                    <header class="comment-header">
                                        <div class="comment-meta"><a class="comment-author" href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>
</a>
                                            <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r"><?php echo $_smarty_tpl->tpl_vars['v']->value['reply_at'];?>
</time>
                                        </div>
                                    </header>
                                    <div class="comment-body">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['reply_contents'];?>

                                    </div>
                                </div>
                            </li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php }?>
                        </ul>
    
                    </div>
                    
                    
                    <div class="line"></div>
                    <!--用于评论-->
                    <form action="index.php?c=detail&a=doReply&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
                    	
                    	<input type="hidden" name='uid' value="<?php echo $_SESSION['h_uid'];?>
"/>
                    	<input type="hidden" name='aid' value="<?php echo $_GET['id'];?>
"/>
                    	<input type="hidden" name='reply_at' value="<?php echo date('Y-m-d H:i:s',time());?>
"/>
                    	
	                    <div class="mt-20" id="ct">
	                        <div id="err" class="Huialert Huialert-danger hidden radius">成功状态提示</div>
	                        <textarea id="textarea1" name="reply_contents" style="height:200px;" placeholder="看完不留一发？"> </textarea>
	                        <div class="text-r mt-10">
	                            <button onclick="getPlainTxt()" class="btn btn-primary radius" > 发表评论</button>
	                        </div>
	                    </div>
					</form>
                </div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
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
						
					<!--图片-->
		<div class="bg-fff box-shadow radius mb-20">
			<div class="tab-category">
				<a href=""><strong>扫我关注</strong></a>
			</div>
			<div class="tab-category-item">
				<img data-original="./Public/img/temp/gg.jpg" class="/img-responsive lazyload" alt="响应式图片">
			</div>
		</div>
					
				</div>
			</div>
	
</section>
	
	
	
<?php
}
}
/* {/block 'main'} */
/* {block 'js'} */
class Block_12912517345abb64b01a6bd4_67763690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
    		$("img.lazyload").lazyload({failurelimit : 3});
    	
        wangEditor.config.printLog = false;
        var editor1 = new wangEditor('textarea1');
        editor1.config.menus = ['insertcode', 'quote', 'bold', '|', 'img', 'emotion', '|', 'undo', 'fullscreen'];
        editor1.config.emotions = { 'default': { title: '老王表情', data: './Public/plugin/wangEditor/emotions1.data'}, 'default2': { title: '老王心情', data: './Public/plugin/wangEditor/emotions3.data'}, 'default3': { title: '顶一顶', data: './Public/plugin/wangEditor/emotions2.data'}};
        editor1.create();

        //show reply
        $(".hf").click(function () {
            pId = $(this).attr("name");
            $(this).parents(".commentList").find(".cancelReply").trigger("click");
            $(this).parent(".comment-body").append($(".comment").clone(true));
            $(this).parent(".comment-body").find(".comment").removeClass("hidden");
            $(this).hide();
        });
        //cancel reply
        $(".cancelReply").on('click',function () {
            $(this).parents(".comment-body").find(".hf").show();
            $(this).parents(".comment-body").find(".comment").remove();
        });
    });

<?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'js'} */
}
