<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:02:33
         compiled from "/var/www/hackception/view/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83353439854f5b7f1e6ed35-41590726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64301d41dce91bd4218a6f7d4f571a0ba5690c90' => 
    array (
      0 => '/var/www/hackception/view/user_login.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83353439854f5b7f1e6ed35-41590726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b7f1e797a6_15551807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b7f1e797a6_15551807')) {function content_54f5b7f1e797a6_15551807($_smarty_tpl) {?><div id="login">
    <form class="login" method="post" action="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/login.php" align="center">
	<fieldset id="inputs">
	    <legend>Login Details</legend>
	    <label>Username</label>
	    <input name="username" type="text" autofocus required>
	    <label>Password</label>
	    <input name="pwd" id="password" type="password" required>
	    <input class="submit" name="submit" type="submit" id="submit" value="Login"><br/>
	    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/forgotpassword.php">Forgot your password</a><br/>
	    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/register.php">Create an account</a>
        </fieldset>
    </form>
</div>
<?php }} ?>