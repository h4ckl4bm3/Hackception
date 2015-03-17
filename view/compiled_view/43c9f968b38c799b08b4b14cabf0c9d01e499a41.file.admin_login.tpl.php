<?php /* Smarty version Smarty-3.1.8, created on 2015-03-05 09:48:53
         compiled from "/var/www/hackception/admin/view/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54633766254f5b87711d801-71732012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c9f968b38c799b08b4b14cabf0c9d01e499a41' => 
    array (
      0 => '/var/www/hackception/admin/view/admin_login.tpl',
      1 => 1425489404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54633766254f5b87711d801-71732012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b877162c79_19363276',
  'variables' => 
  array (
    'site_root_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b877162c79_19363276')) {function content_54f5b877162c79_19363276($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/css/login.css" />
<div id="login">
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/login.php">
    	<h1>Log In</h1>
	<fieldset id="inputs">
	    <input name="username" id="username" type="text" placeholder="Username" autofocus required>   
	    <input name="pwd" id="password" type="password" placeholder="Password" required>
	</fieldset>
	<fieldset id="actions">
            <input name="submit" type="submit" id="submit" value="Login">
        </fieldset>
    </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>