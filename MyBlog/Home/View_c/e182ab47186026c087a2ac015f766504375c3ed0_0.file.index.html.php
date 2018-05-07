<?php
/* Smarty version 3.1.30, created on 2018-03-06 11:56:12
  from "D:\xampp\htdocs\month05\week02\day02\MyBlog\Home\View\Layouts\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e73cc80e8e4_21576231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e182ab47186026c087a2ac015f766504375c3ed0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day02\\MyBlog\\Home\\View\\Layouts\\index.html',
      1 => 1520333767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9e73cc80e8e4_21576231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>个人博客</title>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="keywords" content="个人博客">
<meta name="description" content="一个走在PHP开发之路上的草根程序员个人博客网站。">
<LINK rel="Bookmark" href="favicon.ico" >
<LINK rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 type="text/javascript" src="/staticRes/js/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/staticRes/js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="stylesheet" type="text/css" href="./Public/plugin/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="./Public/plugin/Hui-iconfont/1.0.8/iconfont.min.css" />
<link rel="stylesheet" type="text/css" href="./Public/css/common.css" />
<link rel="stylesheet" type="text/css" href="./Public/plugin/pifu/pifu.css" />
<!--[if lt IE 9]>
<link href="/staticRes/lib/h-ui/css/H-ui.ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container cl">
            <a class="navbar-logo hidden-xs" href="http://www.wfyvv.com">
                <img class="logo" src="./Public/img/logo.png" alt="个人博客" />
            </a>
            <a class="logo navbar-logo-m visible-xs" href="/">博客</a>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:void(0);" onclick="showSide();">&#xe667;</a>
            <nav class="nav navbar-nav nav-collapse w_menu" role="navigation">
                <ul class="cl">
                    <li> <a href="./index.php?c=index&a=index" data-hover="首页" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14131877555a9e73cc7a4894_58515202', 'style1');
?>
">首页</a> </li>
                    <li> <a href="./index.php?c=about&a=index" data-hover="关于我" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16071256415a9e73cc7adef6_34021899', 'style2');
?>
">关于我</a> </li>
                    <li> <a href="./index.php?c=heart&a=index" data-hover="碎言碎语" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14607853115a9e73cc7b6f07_82035401', 'style3');
?>
">碎言碎语</a> </li>
                    <li><a href="./index.php?c=article&a=index" data-hover="学无止尽" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177727775a9e73cc7c0f63_62347671', 'style4');
?>
">学无止尽</a></li>
                    <li> <a href="./index.php?c=reply&a=index" data-hover="留言板" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_522065785a9e73cc7c9eb6_82534648', 'style5');
?>
">留言板</a> </li>
                </ul>
            </nav>
            <nav class="navbar-nav navbar-userbar hidden-xs hidden-sm " style="top: 0;">
                <ul class="cl">
                    <li class="userInfo dropDown dropDown_hover">
                    	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5719335695a9e73cc7d3927_16366629', 'login');
?>
   
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21264616195a9e73cc808ba6_06679710', 'main');
?>


</section>
<footer class="footer mt-20">
    <div class="container-fluid" id="foot">
        <p>Copyright &copy; 2016-2017 www.wfyvv.com <br>
            <a href="http://www.miitbeian.gov.cn/" target="_blank">皖ICP备17002922号</a><br>
        </p>
    </div>
</footer>
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/plugin/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/plugin/layer/3.0/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/plugin/h-ui/js/H-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/plugin/pifu/pifu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> $(function(){ $(window).on("scroll",backToTopFun); backToTopFun(); }); <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/plugin/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(function(){
//幻灯片

//标签
	$(".tags a").each(function(){
		var x = 9;
		var y = 0;
		var rand = parseInt(Math.random() * (x - y + 1) + y);
		$(this).addClass("tags"+rand)
	});
	
});

<?php echo '</script'; ?>
> 

</body>
</html>
<?php }
/* {block 'style1'} */
class Block_14131877555a9e73cc7a4894_58515202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style1'} */
/* {block 'style2'} */
class Block_16071256415a9e73cc7adef6_34021899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style2'} */
/* {block 'style3'} */
class Block_14607853115a9e73cc7b6f07_82035401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style3'} */
/* {block 'style4'} */
class Block_177727775a9e73cc7c0f63_62347671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style4'} */
/* {block 'style5'} */
class Block_522065785a9e73cc7c9eb6_82534648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style5'} */
/* {block 'login'} */
class Block_5719335695a9e73cc7d3927_16366629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    		
                    		
                             <a href="./index.php?c=login&a=index" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})">登入</a> 
                            
                            
                        <?php
}
}
/* {/block 'login'} */
/* {block 'main'} */
class Block_21264616195a9e73cc808ba6_06679710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="container pt-20">
	<!--<div class="Huialert Huialert-info"><i class="Hui-iconfont">&#xe6a6;</i>成功状态提示</div>-->
  <!--left-->
  <div class="col-sm-9 col-md-9">
  	<!--滚动图-->
  	<div class="slider_main">
            <div class="slider">
                <div class="bd">
                    <ul>
                        <li><a href="#" target="_blank"><img src="./Public/img/temp/banner1.jpg"></a></li>
                        <li><a href="#" target="_blank"><img src="./Public/img/temp/banner8.png"></a></li>
                    </ul>
                </div>
                <ol class="hd cl dots">
                    <li>1</li>
                    <li>2</li>
                </ol>
                <a class="slider-arrow prev" href="javascript:void(0)"></a>
                <a class="slider-arrow next" href="javascript:void(0)"></a>
            </div>
        </div>
  		
		<div class="mt-20 bg-fff box-shadow radius mb-5">
			<div class="tab-category">
				<a href=""><strong class="current">最新发布</strong></a>
			</div>
		</div>

		<div class="art_content">
			<ul class="index_arc">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
				
				<li class="index_arc_item">
					<a href="#" class="pic">
						<img class="lazyload" src="../Public/Admin/Uploads/s_<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt="应该选" />
					</a>
					<h4 class="title"><a href="article_detail.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
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
						<p class="commonts"><i class="Hui-iconfont" title="点击量">&#xe622;</i> <span class="cy_cmt_count">20</span></p>
					</div>
					<div class="desc"><?php echo $_smarty_tpl->tpl_vars['v']->value['details'];?>
</div>
				</li>
				
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          
			</ul>
		</div>
  </div>
  
  <!--right-->
  <div class="col-sm-3 col-md-3">
  	
  	<!--站点声明-->
        <div class="panel panel-default mb-20">
            <div class="panel-body">
                <i class="Hui-iconfont" style="float: left;">&#xe62f;&nbsp;</i>
                <div class="slideTxtBox">
                    <div class="bd">
                        <ul>
                            <li><a href="javascript:void(0);">Lao博客测试版上线，欢迎访问</a></li>
                            <li><a href="javascript:void(0);">内容如有侵犯，请立即联系管理员删除</a></li>
                            <li><a href="javascript:void(0);">本站内容仅供学习和参阅，不做任何商业用途</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
  	<!--博主信息-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>博主信息</strong></a>
            </div>
            <div class="tab-category-item">
                <ul class="index_recd">
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe653;</i>姓名：王风宇</li>
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe70d;</i>职业：JavaWeb开发</li>
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe63b;</i>邮箱：<a href="mailto:wfyv@qq.com">wfyv@qq.com</a></li>
                    <li class="index_recd_item"><i class="Hui-iconfont">&#xe671;</i>定位：安徽 &middot; 合肥</li>
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
					<li>
						<a href="#">阻止a标签href默认跳转事件</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe622;</i> 276 </p>
					</li>
					<li >
						<a href="#">PHP面试题汇总</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe622;</i> 276 </p>
					</li>
					<li >
						<a href="#">阻止a标签href默认跳转事件</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe622;</i> 276 </p>
					</li>
					<li >
						<a href="#">阻止a标签href默认跳转事件</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe622;</i> 276 </p>
					</li>
					<li >
						<a href="#">PHP面试题汇总</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe622;</i> 276 </p>
					</li>
				</ul>
			</div>
		</div>
		
		<!--点击排行-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>点击排行</strong></a>
            </div>
            <div class="tab-category-item">
                <ul class="index_recd clickTop">
                    <li>
                        <a href="#">AJAX的刷新和前进后退问题解决</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
                    </li>
                    <li>
                        <a href="#">AJAX的刷新和前进后退问题解决</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
                    </li>
                    <li>
                        <a href="#">AJAX的刷新和前进后退问题解决</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
                    </li>
                    <li>
                        <a href="#">AJAX的刷新和前进后退问题解决</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
                    </li>
                    <li>
                        <a href="#">AJAX的刷新和前进后退问题解决</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
                    </li>
                    <li>
                        <a href="#">AJAX的刷新和前进后退问题解决</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
                    </li>
                    <li>
                        <a href="#">AJAX的刷新和前进后退问题解决</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
                    </li>
                </ul>
            </div>
        </div>
        
		<!--图片-->
		<div class="bg-fff box-shadow radius mb-20">
			<div class="tab-category">
				<a href=""><strong>扫我关注</strong></a>
			</div>
			<div class="tab-category-item">
				<img src="./Public/temp/gg.jpg" class="img-responsive lazyload" alt="响应式图片">
			</div>
		</div>
		
		<!--友情链接-->
		<div class="bg-fff box-shadow radius mb-20">
			<div class="tab-category">
				<a href=""><strong>隔壁邻居</strong></a>
			</div>
			<div class="tab-category-item">
				<span><i class="Hui-iconfont">&#xe6f1;</i><a href="#" class="btn-link">百度</a></span>
				<span><i class="Hui-iconfont">&#xe6f1;</i><a href="#" class="btn-link">淘宝</a></span>
				<span><i class="Hui-iconfont">&#xe6f1;</i><a href="#" class="btn-link">腾讯</a></span>
				<span><i class="Hui-iconfont">&#xe6f1;</i><a href="#" class="btn-link">慕课网</a></span>
				<span><i class="Hui-iconfont">&#xe6f1;</i><a href="#" class="btn-link">h-ui</a></span>
			</div>
		</div>
		<!--最近访客-->
		<div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>最近访客</strong></a>
            </div>
            <div class="panel-body">
                <ul class="recent">
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                    <div class="item"><img src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt=""></div>
                </ul>
            </div>
        </div>
  </div>

<?php
}
}
/* {/block 'main'} */
}
