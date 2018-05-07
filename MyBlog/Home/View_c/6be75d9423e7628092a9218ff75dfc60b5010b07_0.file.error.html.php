<?php
/* Smarty version 3.1.30, created on 2018-03-06 11:11:50
  from "D:\xampp\htdocs\month05\week02\day02\MyBlog\Home\View\error.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e6966d659f2_70108284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be75d9423e7628092a9218ff75dfc60b5010b07' => 
    array (
      0 => 'D:\\xampp\\htdocs\\month05\\week02\\day02\\MyBlog\\Home\\View\\error.html',
      1 => 1520298224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9e6966d659f2_70108284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html;" http-equiv="Content-Type" charset="utf-8">
<title>系统发生错误</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
html{ overflow-y: scroll; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
img{ border: 0; }
.error{ padding: 24px 48px; }
.face{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
h1{ font-size: 32px; line-height: 48px; color:red;}
.error .content{ padding-top: 10px}
.error .info{ margin-bottom: 12px; }
.error .info .title{ margin-bottom: 3px; }
.error .info .title h3{ color: #000; font-weight: 700; font-size: 16px; }
.error .info .text{ line-height: 24px; }
.copyright{ padding: 12px 48px; color: #999; }
.copyright a{ color: #000; text-decoration: none; }
</style>
</head>
<body>
<div class="error">
<p class="face">:(</p>
<h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
<div class="content">
	<span id="seconds"><?php echo $_smarty_tpl->tpl_vars['seconds']->value;?>
</span>秒钟之后自动<a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'>跳转</a>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
		
	//获取秒的元素
	var t = document.getElementById('seconds');

	//获取内容,并转换为整型
	var t1 = parseInt(t.innerHTML)

	//定时器
	setInterval(function(){

		//自减
		t.innerHTML = --t1;

		//判断
		if(t1<=0){
			location.replace('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
');
		}

	}, 1000);

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
