<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:02:45
         compiled from "/var/www/hackception/view/register_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162864202554f5b7fdc98525-94897992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a0a8767269e203c4064670d0ea1a9f93fa181e3' => 
    array (
      0 => '/var/www/hackception/view/register_user.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162864202554f5b7fdc98525-94897992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b7fdce1b15_24255470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b7fdce1b15_24255470')) {function content_54f5b7fdce1b15_24255470($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Register User</h3></div>
    </div><br/>
    
    <div id="input_form">
    <form id="form" name="form" method="post">
	<table class="user_add">
	    <tr>
		<td><label for="name">Username</label></td>
		<td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->username;?>
"/></td>
	    </tr>
	    
	    <tr>
		<td><label>Full Name</label></td>
		<td><input type="text" name="full_name" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->name;?>
"/></td>
	    </tr>
	    
	    <tr>
		<td><label>Email</label></td>
		<td><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->email;?>
"/></td>
	    </tr>
	    
	    <tr>
		<td><label>Password</label></td>
		<td><input type="password" name="password" id="password"/></td>
	    </tr>
	    
	    <tr>
		<td><label>Confirm Password</label></td>
		<td><input type="password" name="confirmpassword" id="password"/></td>
	    </tr>
	    
	    <tr class="submit_btn">
		<td colspan="2">
		    <p class="submit"><input type="submit" name="submit" id="submit" value="Register User" /></p>
		</td>
	    </tr>
	</table>
    </form>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>