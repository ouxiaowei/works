<?php
/* Smarty version 3.1.30, created on 2018-03-29 20:07:24
  from "D:\xampp\htdocs\month05\week02\3.9\MyBlog\Home\View\Reply\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abcd6fcaf35c9_87272548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b6839e3a15ac3e97ac83c3c769dfd12c2af035' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\3.9\\MyBlog\\Home\\View\\Reply\\index.html',
      1 => 1522325040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5abcd6fcaf35c9_87272548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11027261655abcd6fca89394_87680914', 'style5');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9642381085abcd6fca98df5_37727361', 'login');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11983171715abcd6fcaeb1c4_97091841', 'main');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2609240785abcd6fcaf1b66_18963501', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style5'} */
class Block_11027261655abcd6fca89394_87680914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	color:#000;
<?php
}
}
/* {/block 'style5'} */
/* {block 'login'} */
class Block_9642381085abcd6fca98df5_37727361 extends Smarty_Internal_Block
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
class Block_11983171715abcd6fcaeb1c4_97091841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="breadcrumb">
    <div class="container"> <i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a> <span class="c-gray en">&gt;</span>  <span class="c-gray">留言板</span> </div>
</nav>

<section class="container">
    <div class="col-xs-12 col-md-10 col-md-offset-1 mt-20">
        <!--用于评论-->
        <form action="index.php?c=reply&a=doReply&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
                        
            <input type="hidden" name='uid_re' value="<?php echo $_SESSION['h_uid'];?>
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
        <div class="line"></div>

        <ul class="commentList mt-50">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
              <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="http://q.qlogo.cn/qqapp/101388738/1CF8425D24660DB8C3EBB76C03D95F35/100"></i></a>
                    <div class="comment-main">
                        <header class="comment-header">
                            <div class="comment-meta"><a class="comment-author" href="#">
                                <?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>

                            </a>
                                <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r"><?php echo $_smarty_tpl->tpl_vars['v']->value['reply_at'];?>
</time>
                            </div>
                        </header>
                        <div class="comment-body">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['reply_contents'];?>

                            <ul class="commentList">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'b', false, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['b']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['b']->value['re_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>
                                        <li class="item cl"> <a href="#"><i class="avatar size-L radius"><img alt="" src="http://qzapp.qlogo.cn/qzapp/101388738/696C8A17B3383B88804BA92ECBAA5D81/100"></i></a>
                                            <div class="comment-main">
                                                <header class="comment-header">
                                                    <div class="comment-meta"><a class="comment-author" href="#"><?php echo $_smarty_tpl->tpl_vars['b']->value['nickname'];?>
</a>
                                                        <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20" class="f-r"><?php echo $_smarty_tpl->tpl_vars['b']->value['reply_at'];?>
</time>
                                                    </div>
                                                </header>
                                                <div class="comment-body">
                                                    <p><?php echo $_smarty_tpl->tpl_vars['b']->value['reply_contents'];?>
</p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } else { ?>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </ul>
                            <form action="index.php?c=reply&a=doReply_n&nau_id=<?php echo $_SESSION['h_uid'];?>
" method="post">
                            <div class="comment mt-20">
                                <div id="err2" class="Huialert Huialert-danger hidden radius">成功状态提示</div>
                                <input type="hidden" name="re_id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                <input type="hidden" name='reply_at' value="<?php echo date('Y-m-d H:i:s',time());?>
"/>
                                <textarea class="textarea" name="reply_contents" style="height:100px;" > </textarea>
                                <button style="float: right;" type="submit" class="btn btn-primary radius mt-10">回复</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <!--用于回复-->
        

    </div>
</section>
<?php
}
}
/* {/block 'main'} */
/* {block 'js'} */
class Block_2609240785abcd6fcaf1b66_18963501 extends Smarty_Internal_Block
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
