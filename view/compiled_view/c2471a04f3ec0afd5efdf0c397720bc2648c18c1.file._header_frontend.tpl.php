<?php /* Smarty version Smarty-3.1.8, created on 2015-03-05 18:56:54
         compiled from "/var/www/hackception/view/_header_frontend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49587079854f5b7f199f542-77083566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2471a04f3ec0afd5efdf0c397720bc2648c18c1' => 
    array (
      0 => '/var/www/hackception/view/_header_frontend.tpl',
      1 => 1425562012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49587079854f5b7f199f542-77083566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b7f1a0f306_72679915',
  'variables' => 
  array (
    'controller_title' => 0,
    'app_title' => 0,
    'site_root_path' => 0,
    'user_menu' => 0,
    'logged_in_user' => 0,
    'foo' => 0,
    'main_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b7f1a0f306_72679915')) {function content_54f5b7f1a0f306_72679915($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if (isset($_smarty_tpl->tpl_vars['controller_title']->value)){?><?php echo $_smarty_tpl->tpl_vars['controller_title']->value;?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['app_title']->value;?>
</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/pagination.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/base.css" />
</head>
<body>
    <div id="main">
	<div id="headerBar">
	    <div class="left">
		<div class="pad_top_5 margin_left_25">
		    <a title="flag=md5(hackception)" href="http://www.owasp.org" target="_blank">
		    <!-- style used inline because it will not be repeated elsewhere in the webapp -->
			<img id="orglogo" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/images/owasp.png">
		    </a>
		</div>
	    </div>
	    <div class="center pad_25">
		<a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
" style="margin:0 0 0 -10%">
		    <img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/images/hacker.png">
		</a>
	    </div>     
	</div>	
	<div id="content" align="center">
	    <?php if (isset($_smarty_tpl->tpl_vars['user_menu']->value)){?>
	  <!--  	<div id="username">Hi <?php echo $_smarty_tpl->tpl_vars['logged_in_user']->value;?>
,</div><!--<br/>-->
		<div id="topMenuHeader"> 
		    <ul id="topMenu">
			    <em id="username">Hi <?php echo $_smarty_tpl->tpl_vars['logged_in_user']->value;?>
,</em><!--<br/>-->
			<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['foo']->value['title']!='Challenges'){?>
			    <li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</a>
			    </li>
				<?php }?>
			<?php } ?>
		    </ul>
		</div>
	    <?php }?>
	    <table id="mainTable">
		<tr>
		   <td id="left_bar" valign="top">			
			<?php if (isset($_smarty_tpl->tpl_vars['main_menu']->value)){?>
			<!-- Main Menu-->
			<div id="menuHeader" class="menubg flt"> 
			    <ul id="mainMenu" class="menu flt">
				<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
				<li>
				<a class="width100" href="<?php if (!isset($_smarty_tpl->tpl_vars['foo']->value['external'])){?><?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
"><span class="padding_menu"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</span></a></li>
				<?php } ?>
			    </ul>
			</div>
			<br/><?php }?><br/>
		    </td>
		    <td id="main_content" valign="top" >
			<div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>