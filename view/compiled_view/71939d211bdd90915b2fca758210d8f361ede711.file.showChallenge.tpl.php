<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:07:54
         compiled from "/var/www/hackception/view/showChallenge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43002469654f5b9327f5ff2-72198919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71939d211bdd90915b2fca758210d8f361ede711' => 
    array (
      0 => '/var/www/hackception/view/showChallenge.tpl',
      1 => 1425323185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43002469654f5b9327f5ff2-72198919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'challenge' => 0,
    'is_logged_in' => 0,
    'is_allowed' => 0,
    'site_root_path' => 0,
    'username' => 0,
    'class_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b932846736_65269325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b932846736_65269325')) {function content_54f5b932846736_65269325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_content" align="center" style="margin:0 0 0 -100%;">
    <div class="header_bar">
	<div class="page_title"><h3 class="center" style="padding:12px 0 0 0;" ><?php echo $_smarty_tpl->tpl_vars['challenge']->value->title;?>
</h3></div>
    </div><br/> 
<table class="user_add show_challenge" style="height: auto;">
    <tr>
	<td><div class="description"><?php echo $_smarty_tpl->tpl_vars['challenge']->value->description;?>
<br/><hr/></div></td>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['is_allowed']->value)){?>
    <tr id="input_form">
	<td class="submit_btn">
	    <p class="submit"><a id="try_me" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/trychallenge.php?id=<?php echo $_smarty_tpl->tpl_vars['challenge']->value->id;?>
&user=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['class_id']->value;?>
">Try it!</a></p>
	</td>
    </tr>
    <?php }?>
</table>
</div>

<?php }} ?>