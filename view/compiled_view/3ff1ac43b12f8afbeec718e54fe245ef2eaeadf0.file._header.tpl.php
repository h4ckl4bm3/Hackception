<?php /* Smarty version Smarty-3.1.8, created on 2015-02-28 21:33:20
         compiled from "/var/www/html/hackademic/admin/view/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16852332654f1e6c872b2a6-64082658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ff1ac43b12f8afbeec718e54fe245ef2eaeadf0' => 
    array (
      0 => '/var/www/html/hackademic/admin/view/_header.tpl',
      1 => 1425138122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16852332654f1e6c872b2a6-64082658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller_title' => 0,
    'app_title' => 0,
    'site_root_path' => 0,
    'main_menu_admin' => 0,
    'logged_in_user' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f1e6c8749795_89232206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f1e6c8749795_89232206')) {function content_54f1e6c8749795_89232206($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if (isset($_smarty_tpl->tpl_vars['controller_title']->value)){?><?php echo $_smarty_tpl->tpl_vars['controller_title']->value;?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['app_title']->value;?>
</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/css/base.css" />
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <div id="main">
	<div id="headerBar">
	    <div class="left">
		<div class="pad_top_5 margin_left_25">
		    <a href="http://www.owasp.org" target="_blank">
		    <!-- style used inline because it will not be repeated elsewhere in the webapp -->
			<img id="orglogo" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/images/owasp.png">
		    </a>
		</div>
	    </div>
	    <div class="center pad_25">
		<a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
">
		    <img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/images/logo.png">
		</a>
	    </div>     
	</div>	
	<div id="content">
	    <?php if (isset($_smarty_tpl->tpl_vars['main_menu_admin']->value)){?>
	    <div>
		
	    </div><br/>
	    <!-- Main Menu -->
	    <div id="menuHeader"> 
		<ul id="mainMenu">
			<em id="username">Hi <?php echo $_smarty_tpl->tpl_vars['logged_in_user']->value;?>
,</em>
		    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_menu_admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
		    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</a></li>
		    <?php } ?>
		</ul>
	    </div><br/><?php }?><br/>
<?php }} ?>