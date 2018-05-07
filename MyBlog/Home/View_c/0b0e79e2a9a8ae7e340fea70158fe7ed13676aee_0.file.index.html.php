<?php
/* Smarty version 3.1.30, created on 2018-03-06 11:37:41
  from "D:\xampp\htdocs\month05\week02\day02\MyBlog\Home\View\Article\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e6f75923af0_28012592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b0e79e2a9a8ae7e340fea70158fe7ed13676aee' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day02\\MyBlog\\Home\\View\\Article\\index.html',
      1 => 1520332620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5a9e6f75923af0_28012592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15821807205a9e6f75911729_13674252', 'style3');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9371339975a9e6f7591d982_77757429', 'login');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4025506435a9e6f75922594_99490207', 'main');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style3'} */
class Block_15821807205a9e6f75911729_13674252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style3'} */
/* {block 'login'} */
class Block_9371339975a9e6f7591d982_77757429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	欢迎<?php echo $_SESSION['h_username'];?>

	
    | <a href="./index.php?c=login&a=doLogout">退出</a> 
    
<?php
}
}
/* {/block 'login'} */
/* {block 'main'} */
class Block_4025506435a9e6f75922594_99490207 extends Smarty_Internal_Block
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
				<li class="index_arc_item">
					<a href="#" class="pic">
						<img class="lazyload" src="temp/art.jpg" alt="应该选" />
					</a>
					<h4 class="title"><a href="article_detail.html">个人博客应该选择什么样的域名和域名后缀</a></h4>
					<div class="date_hits">
						<span>老王</span>
						<span>2017-02-24</span>
						<span><a href="/article-lists/10.html">程序人生</a></span>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
						<p class="commonts"><i class="Hui-iconfont" title="点击量">&#xe622;</i> <span class="cy_cmt_count">20</span></p>
					</div>
					<div class="desc">不论搭建什么样的网站，选择一个好的域名都是很有必要的，选择一个好的域名对网站的意义也是不言而喻的。每一个网站都有之对应的域名，就像人的名字一样。每个人都想自己有个好听的名字，网站也是一样。一个网站可以有多个域名，但是一个域名只能对应一个网站。&nbsp;一、域名要好记，方便输入&nbsp; &nbsp; &nbsp; &nbsp;域名本身的意义就是为了人们方便记忆才使用的，不然都用IP地址就好了。所以，网站域名一定要选择好记忆的。因为域名是</div>
				</li>
				
				
				<li class="index_arc_item">
	            <a href="/article/4" class="pic">
	                <img class="lazyload" src="temp/art.jpg" alt="centos 6.5 nginx安装及配置" >
	            </a>
	        <h4 class="title"><a href="/article/4">centos 6.5 nginx安装及配置</a></h4>
	        <div class="date_hits">
	            <span>老王</span>
	            <span>2017-3-15</span>
	            <span>
	                <a href="/article?t=1">程序人生</a>
	            </span>
	            <p class="hits"><i class="Hui-iconfont" title="点击量"></i> 13° </p>
	            <p class="commonts"><i class="Hui-iconfont" title="评论"></i> <span class="cy_cmt_count">0</span></p>
	        </div>
	        <div class="desc">linux环境中nginx安装及配置简要概述。。。</div>
	    </li>
         
         <li class="index_arc_item">
					<a href="#" class="pic">
						<img class="lazyload" src="temp/art.jpg" alt="应该选" />
					</a>
					<h4 class="title"><a href="article_detail.html">个人博客应该选择什么样的域名和域名后缀</a></h4>
					<div class="date_hits">
						<span>老王</span>
						<span>2017-02-24</span>
						<span><a href="/article-lists/10.html">程序人生</a></span>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
						<p class="commonts"><i class="Hui-iconfont" title="点击量">&#xe622;</i> <span class="cy_cmt_count">20</span></p>
					</div>
					<div class="desc">不论搭建什么样的网站，选择一个好的域名都是很有必要的，选择一个好的域名对网站的意义也是不言而喻的。每一个网站都有之对应的域名，就像人的名字一样。每个人都想自己有个好听的名字，网站也是一样。一个网站可以有多个域名，但是一个域名只能对应一个网站。&nbsp;一、域名要好记，方便输入&nbsp; &nbsp; &nbsp; &nbsp;域名本身的意义就是为了人们方便记忆才使用的，不然都用IP地址就好了。所以，网站域名一定要选择好记忆的。因为域名是</div>
				</li>
				
				
				<li class="index_arc_item">
	            <a href="/article/4" class="pic">
	                <img class="lazyload" src="temp/art.jpg" alt="centos 6.5 nginx安装及配置" >
	            </a>
	        <h4 class="title"><a href="/article/4">centos 6.5 nginx安装及配置</a></h4>
	        <div class="date_hits">
	            <span>老王</span>
	            <span>2017-3-15</span>
	            <span>
	                <a href="/article?t=1">程序人生</a>
	            </span>
	            <p class="hits"><i class="Hui-iconfont" title="点击量"></i> 13° </p>
	            <p class="commonts"><i class="Hui-iconfont" title="评论"></i> <span class="cy_cmt_count">0</span></p>
	        </div>
	        <div class="desc">linux环境中nginx安装及配置简要概述。。。</div>
	    </li>
          
          <li class="index_arc_item">
					<a href="#" class="pic">
						<img class="lazyload" src="temp/art.jpg" alt="应该选" />
					</a>
					<h4 class="title"><a href="article_detail.html">个人博客应该选择什么样的域名和域名后缀</a></h4>
					<div class="date_hits">
						<span>老王</span>
						<span>2017-02-24</span>
						<span><a href="/article-lists/10.html">程序人生</a></span>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
						<p class="commonts"><i class="Hui-iconfont" title="点击量">&#xe622;</i> <span class="cy_cmt_count">20</span></p>
					</div>
					<div class="desc">不论搭建什么样的网站，选择一个好的域名都是很有必要的，选择一个好的域名对网站的意义也是不言而喻的。每一个网站都有之对应的域名，就像人的名字一样。每个人都想自己有个好听的名字，网站也是一样。一个网站可以有多个域名，但是一个域名只能对应一个网站。&nbsp;一、域名要好记，方便输入&nbsp; &nbsp; &nbsp; &nbsp;域名本身的意义就是为了人们方便记忆才使用的，不然都用IP地址就好了。所以，网站域名一定要选择好记忆的。因为域名是</div>
				</li>
				
				
				<li class="index_arc_item">
	            <a href="/article/4" class="pic">
	                <img class="lazyload" src="temp/art.jpg" alt="centos 6.5 nginx安装及配置" >
	            </a>
	        <h4 class="title"><a href="/article/4">centos 6.5 nginx安装及配置</a></h4>
	        <div class="date_hits">
	            <span>老王</span>
	            <span>2017-3-15</span>
	            <span>
	                <a href="/article?t=1">程序人生</a>
	            </span>
	            <p class="hits"><i class="Hui-iconfont" title="点击量"></i> 13° </p>
	            <p class="commonts"><i class="Hui-iconfont" title="评论"></i> <span class="cy_cmt_count">0</span></p>
	        </div>
	        <div class="desc">linux环境中nginx安装及配置简要概述。。。</div>
	    </li>
          
          <li class="index_arc_item">
					<a href="#" class="pic">
						<img class="lazyload" src="temp/art.jpg" alt="应该选" />
					</a>
					<h4 class="title"><a href="article_detail.html">个人博客应该选择什么样的域名和域名后缀</a></h4>
					<div class="date_hits">
						<span>老王</span>
						<span>2017-02-24</span>
						<span><a href="/article-lists/10.html">程序人生</a></span>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
						<p class="commonts"><i class="Hui-iconfont" title="点击量">&#xe622;</i> <span class="cy_cmt_count">20</span></p>
					</div>
					<div class="desc">不论搭建什么样的网站，选择一个好的域名都是很有必要的，选择一个好的域名对网站的意义也是不言而喻的。每一个网站都有之对应的域名，就像人的名字一样。每个人都想自己有个好听的名字，网站也是一样。一个网站可以有多个域名，但是一个域名只能对应一个网站。&nbsp;一、域名要好记，方便输入&nbsp; &nbsp; &nbsp; &nbsp;域名本身的意义就是为了人们方便记忆才使用的，不然都用IP地址就好了。所以，网站域名一定要选择好记忆的。因为域名是</div>
				</li>
				
				
				<li class="index_arc_item">
	            <a href="/article/4" class="pic">
	                <img class="lazyload" src="temp/art.jpg" alt="centos 6.5 nginx安装及配置" >
	            </a>
	        <h4 class="title"><a href="/article/4">centos 6.5 nginx安装及配置</a></h4>
	        <div class="date_hits">
	            <span>老王</span>
	            <span>2017-3-15</span>
	            <span>
	                <a href="/article?t=1">程序人生</a>
	            </span>
	            <p class="hits"><i class="Hui-iconfont" title="点击量"></i> 13° </p>
	            <p class="commonts"><i class="Hui-iconfont" title="评论"></i> <span class="cy_cmt_count">0</span></p>
	        </div>
	        <div class="desc">linux环境中nginx安装及配置简要概述。。。</div>
	    </li>
          
				</ul>
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
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
					</li>
					<li >
						<a href="#">PHP面试题汇总</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
					</li>
					<li >
						<a href="#">阻止a标签href默认跳转事件</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
					</li>
					<li >
						<a href="#">阻止a标签href默认跳转事件</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
					</li>
					<li >
						<a href="#">PHP面试题汇总</a>
						<p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> 276° </p>
					</li>
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
