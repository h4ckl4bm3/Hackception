<?php /* Smarty version Smarty-3.1.8, created on 2015-02-28 23:25:57
         compiled from "/var/www/html/hackademic/view/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7979982354f1e25627a540-69135101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4fad8318c80b4fbfb32e55e1aeddb7e74de63a2' => 
    array (
      0 => '/var/www/html/hackademic/view/user_login.tpl',
      1 => 1425146153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7979982354f1e25627a540-69135101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f1e25627f935_76065526',
  'variables' => 
  array (
    'site_root_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f1e25627f935_76065526')) {function content_54f1e25627f935_76065526($_smarty_tpl) {?><div id="login">
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