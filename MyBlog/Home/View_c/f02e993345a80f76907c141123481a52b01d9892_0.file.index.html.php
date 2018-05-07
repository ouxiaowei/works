<?php
/* Smarty version 3.1.30, created on 2018-03-31 11:47:05
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Home\View\Layouts\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abf04b944ef87_71816987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02e993345a80f76907c141123481a52b01d9892' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Home\\View\\Layouts\\index.html',
      1 => 1522468023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abf04b944ef87_71816987 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="stylesheet" type="text/css" href="./Public/plugin/wangEditor/css/wangEditor.min.css">
<link rel="stylesheet" type="text/css" href="./Public/css/timeline.css">
<!--[if lt IE 9]>
<link href="/staticRes/lib/h-ui/css/H-ui.ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container cl">
            <a class="navbar-logo hidden-xs" href="https://ouxiaowei.github.io/">
                <img class="logo" src="./Public/img/MyLogo.jpg" alt="我的博客" />
            </a>
            <a class="logo navbar-logo-m visible-xs" href="/">xw博客</a>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:void(0);" onclick="showSide();">&#xe667;</a>
            <nav class="nav navbar-nav nav-collapse w_menu" role="navigation">
                <ul class="cl">
                    <li> <a href="./index.php?c=index&a=index" data-hover="Home" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15389250375abf04b93b8890_24547999', 'style1');
?>
">Home</a> </li>
                    <li> <a href="./index.php?c=about&a=index" data-hover="About" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13459128375abf04b93be473_64528790', 'style2');
?>
">About</a> </li>
                    <li> <a href="./index.php?c=heart&a=index" data-hover="Heart" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11029324985abf04b93c40f1_78512037', 'style3');
?>
">Heart</a> </li>
                    <li><a href="./index.php?c=article&a=index" data-hover="Learn" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14355604405abf04b93c99e0_79873985', 'style4');
?>
">Learn</a></li>
                    <li> <a href="./index.php?c=reply&a=index" data-hover="Message" style="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7388909245abf04b93cf197_92768537', 'style5');
?>
">Message</a> </li>
                </ul>
            </nav>
            <nav class="navbar-nav navbar-userbar hidden-xs hidden-sm " style="top: 0;">
                <ul class="cl">
                    <li class="userInfo dropDown dropDown_hover">
                    	
                    	<?php if ($_SESSION['h_username'] == null) {?>
                    		
                    		
                             <a href="./index.php?c=login&a=index" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})">登入</a> 
                            
                        <?php } else { ?>    
                        	<a href="javascript:;" ><img class="avatar radius" src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/40" alt="丶似浅 "></a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li><a href="./index.php?c=login&a=doLogout">退出</a></li>
                            </ul>
                        <?php }?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17891510155abf04b9446359_28339249', 'main');
?>


</section>
<footer class="footer mt-20">
    <div class="container-fluid" id="foot">
        <p>Copyright &copy; 2016-2017 www.xw.com <br>
            <a href="http://www.miitbeian.gov.cn/" target="_blank">备1825225号</a><br>
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
 type="text/javascript" src="./Public/plugin/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/plugin/wangEditor/js/wangEditor.min.js"><?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10500047525abf04b944b7a1_05947285', 'js');
?>


<?php echo '<script'; ?>
>
	
    $(function(){ $(window).on("scroll",backToTopFun); backToTopFun(); });
    $(function(){
    //幻灯片
    jQuery(".slider_main .slider").slide({mainCell: ".bd ul", titCell: ".hd li", trigger: "mouseover", effect: "leftLoop", autoPlay: true, delayTime: 700, interTime: 2000, pnLoop: true, titOnClassName: "active"})
    //tips
    jQuery(".slideTxtBox").slide({titCell: ".hd ul", mainCell: ".bd ul", autoPage: true, effect: "top", autoPlay: true});
    //标签
    	$(".tags a").each(function(){
    		var x = 9;
    		var y = 0;
    		var rand = parseInt(Math.random() * (x - y + 1) + y);
    		$(this).addClass("tags"+rand)
    	});
    	
    	$("img.lazyload").lazyload({failurelimit : 3});
    });


<?php echo '</script'; ?>
> 

</body>
</html>
<?php }
/* {block 'style1'} */
class Block_15389250375abf04b93b8890_24547999 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style1'} */
/* {block 'style2'} */
class Block_13459128375abf04b93be473_64528790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style2'} */
/* {block 'style3'} */
class Block_11029324985abf04b93c40f1_78512037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style3'} */
/* {block 'style4'} */
class Block_14355604405abf04b93c99e0_79873985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style4'} */
/* {block 'style5'} */
class Block_7388909245abf04b93cf197_92768537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style5'} */
/* {block 'main'} */
class Block_17891510155abf04b9446359_28339249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="container pt-20">
  <div class="col-sm-9 col-md-9">
  	<!--滚动图-->
  	<div class="slider_main">
            <div class="slider">
                <div class="bd">
                    <ul>
                        <li><a href="#" target="_blank"><img src="./Public/img/Banner/<?php echo $_smarty_tpl->tpl_vars['one']->value;?>
.jpg"></a></li>
                        <li><a href="#" target="_blank"><img src="./Public/img/Banner/<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
.jpg"></a></li>
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
    				<?php $_smarty_tpl->_assignInScope('row', $_smarty_tpl->tpl_vars['article']->value->query("select count(*) r_num from reply where aid=".((string)$_smarty_tpl->tpl_vars['v']->value['id'])));
?>
    				<?php $_smarty_tpl->_assignInScope('bool', $_smarty_tpl->tpl_vars['article']->value->query("update article set reply_num=".((string)$_smarty_tpl->tpl_vars['row']->value[0]['r_num'])." where id=".((string)$_smarty_tpl->tpl_vars['v']->value['id'])));
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
                            <li><a href="javascript:void(0);">XW博客测试版上线，欢迎访问</a></li>
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
		
		<!--点击排行-->
        <div class="bg-fff box-shadow radius mb-20">
            <div class="tab-category">
                <a href=""><strong>点击排行</strong></a>
            </div>
            <div class="tab-category-item">
                <ul class="index_recd clickTop">
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                        <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i><?php echo $_smarty_tpl->tpl_vars['v']->value['click_num'];?>
° </p>
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
/* {block 'js'} */
class Block_10500047525abf04b944b7a1_05947285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'js'} */
}
