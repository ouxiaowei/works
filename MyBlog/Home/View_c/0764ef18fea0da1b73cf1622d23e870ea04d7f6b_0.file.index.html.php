<?php
/* Smarty version 3.1.30, created on 2018-03-07 06:17:41
  from "D:\xampp\htdocs\month05\week02\day03\MyBlog\Home\View\Reply\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f75f5c39e06_46122259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0764ef18fea0da1b73cf1622d23e870ea04d7f6b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day03\\MyBlog\\Home\\View\\Reply\\index.html',
      1 => 1520384867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5a9f75f5c39e06_46122259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6268387235a9f75f5c21602_34931280', 'style5');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15402170575a9f75f5c312a7_32590508', 'login');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8338910725a9f75f5c37692_55974244', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style5'} */
class Block_6268387235a9f75f5c21602_34931280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style5'} */
/* {block 'login'} */
class Block_15402170575a9f75f5c312a7_32590508 extends Smarty_Internal_Block
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
class Block_8338910725a9f75f5c37692_55974244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="breadcrumb">
    <div class="container"> <i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">留言板</span> </div>
</nav>

<section class="container">
    <div class="col-xs-12 col-md-10 col-md-offset-1 mt-20">
        <!--用于评论-->
        <form action="">
            <div class="mt-20" id="ct">
                <div id="err" class="Huialert Huialert-danger hidden radius">成功状态提示</div>
                <textarea id="textarea1" name="comment" style="height:200px;" placeholder="看完不留一发？"> </textarea>
                <div class="text-r mt-10">
                    <button type="submit" onclick="getPlainTxt()" class="btn btn-primary radius" > 发表评论</button>
                </div>
            </div>
        </form>
        <div class="line"></div>

        <ul class="commentList mt-50">

          <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/100"></i></a>
                <div class="comment-main">
                    <header class="comment-header">
                        <div class="comment-meta"><a class="comment-author" href="#">老王</a>
                            <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">2014-8-31 15:20</time>
                        </div>
                    </header>
                    <div class="comment-body">
                        你是猴子派来的救兵吗？

                        <ul class="commentList">
                            <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="http://qzapp.qlogo.cn/qzapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/100"></i></a>
                                <div class="comment-main">
                                    <header class="comment-header">
                                        <div class="comment-meta"><a class="comment-author" href="#">老王</a>
                                            <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">2014-8-31 15:20</time>
                                        </div>
                                    </header>
                                    <div class="comment-body">
                                        <p> 是的</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="http://qzapp.qlogo.cn/qzapp/101388738/696C8A17B3383B88804BA92ECBAA5D81/100"></i></a>
                                <div class="comment-main">
                                    <header class="comment-header">
                                        <div class="comment-meta"><a class="comment-author" href="#">老王</a>
                                            <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">2014-8-31 15:20</time>
                                        </div>
                                    </header>
                                    <div class="comment-body">
                                        <p> +1</p>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <button class="hf f-r btn btn-default size-S mt-10" name="2">回复</button>

                    </div>
                </div>
            </li>
            <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="http://qzapp.qlogo.cn/qzapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/100"></i></a>
                <div class="comment-main">
                    <header class="comment-header">
                        <div class="comment-meta"><a class="comment-author" href="#">老王</a>
                            <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r">2014-8-31 15:20</time>
                        </div>
                    </header>
                    <div class="comment-body">
                        你是猴子派来的救兵吗？

                        <button class="hf f-r btn btn-default size-S mt-10" name="3">回复</button>

                    </div>
                </div>
            </li>

        </ul>
        <!--用于回复-->
        <div class="comment hidden mt-20">
            <div id="err2" class="Huialert Huialert-danger hidden radius">成功状态提示</div>
            <textarea class="textarea" style="height:100px;" > </textarea>
            <button onclick="hf(this);" type="button" class="btn btn-primary radius mt-10">回复</button>
            <a class="cancelReply f-r mt-10">取消回复</a>
        </div>

    </div>
</section>
<?php
}
}
/* {/block 'main'} */
}
