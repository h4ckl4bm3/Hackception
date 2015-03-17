<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:09:04
         compiled from "/var/www/html/sud/hackception-anokha15/view/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13162180054f484186502c1-48774369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41c872d8bcf86620d6c0a3657f7f6f2b7418ff99' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/view/user_login.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13162180054f484186502c1-48774369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f48418659f46_94851996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f48418659f46_94851996')) {function content_54f48418659f46_94851996($_smarty_tpl) {?><div id="login">
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