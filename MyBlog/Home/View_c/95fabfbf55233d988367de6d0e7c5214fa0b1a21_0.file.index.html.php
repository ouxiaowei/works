<?php
/* Smarty version 3.1.30, created on 2018-03-06 11:37:40
  from "D:\xampp\htdocs\month05\week02\day02\MyBlog\Home\View\Heart\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e6f748ae5e5_26451850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95fabfbf55233d988367de6d0e7c5214fa0b1a21' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day02\\MyBlog\\Home\\View\\Heart\\index.html',
      1 => 1520332605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5a9e6f748ae5e5_26451850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16090101635a9e6f74893709_01188039', 'style3');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19823554795a9e6f748a58b7_29583528', 'login');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5725373015a9e6f748ac8b6_95659013', 'main');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style3'} */
class Block_16090101635a9e6f74893709_01188039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style3'} */
/* {block 'login'} */
class Block_19823554795a9e6f748a58b7_29583528 extends Smarty_Internal_Block
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
class Block_5725373015a9e6f748ac8b6_95659013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="breadcrumb">
    <div class="container"><i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span> <span class="c-gray">碎言碎语</span></div>
</nav>

<section class="container mt-20">
    <div class="container-fluid">
        <div class="timeline">
        	
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					<div class="cd-timeline-block">
					    <div class="cd-timeline-img cd-picture">
					        <img src="./Public/css/timeline/cd-icon-location.svg" alt="position">
					    </div>
					    <div class="cd-timeline-content">
					        <h4>测试测试</h4>
					        <p>Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。Lao王博客测试版本上线。。</p>
					        <a href="http://www.wfyvv.com" class="f-r"><input class="btn btn-success size-S" type="button" value="更多"></a>
					        <span class="cd-date">2017年1月01日</span>
					    </div>
					</div>
					
        </div>
    </div>

</section>
    <?php
}
}
/* {/block 'main'} */
}
