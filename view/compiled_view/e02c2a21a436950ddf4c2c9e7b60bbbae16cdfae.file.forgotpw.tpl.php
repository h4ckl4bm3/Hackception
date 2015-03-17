<?php /* Smarty version Smarty-3.1.8, created on 2015-03-06 12:25:15
         compiled from "/var/www/hackception/view/forgotpw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34883485554f94f53c30994-19192957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e02c2a21a436950ddf4c2c9e7b60bbbae16cdfae' => 
    array (
      0 => '/var/www/hackception/view/forgotpw.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34883485554f94f53c30994-19192957',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f94f53c60677_33735718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f94f53c60677_33735718')) {function content_54f94f53c60677_33735718($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Forgot Your Password?</h3></div>
    </div><br/><br/>
    
    <div id="input_form">
    <form id="form" name="form" method="post">
	<table class="user_add" style="height: auto;">
	    <tr>
		<td><label for="name">Enter Your Username:</label></td>
		<td><input type="text" name="username"/></td>
	    </tr>
	    <tr class="submit_btn">
		<td colspan="2">
		    <p class="submit left"><input type="submit" name="submit" id="submit" value="Submit Username" /></p>
		</td>
	    </tr>
	</table>
    </form>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>