<?php /* Smarty version Smarty-3.1.8, created on 2015-03-05 18:42:23
         compiled from "/var/www/hackception/admin/view/adduser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187936332054f856371dcd62-94117551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e3318b2e8dd200e3c8ff76f9a8449b2620d109' => 
    array (
      0 => '/var/www/hackception/admin/view/adduser.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187936332054f856371dcd62-94117551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f85637241ce7_35582946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f85637241ce7_35582946')) {function content_54f85637241ce7_35582946($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Add User</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>

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
		<td><input type="text" name="full_name"value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->full_name;?>
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

	    <tr>
		<td><label>Activate User</label></td>
		<td class="radio">
			<?php if ($_smarty_tpl->tpl_vars['cached']->value->activated==1){?>
		    <input type="radio" name="activated" value="1" checked="true"/>Yes
		    <input type="radio" name="activated" value="0"/>No
		    <?php }else{ ?>
		    <input type="radio" name="activated" value="1" />Yes
		    <input type="radio" name="activated" value="0"checked="true"/>No
		    <?php }?>
		</td>
	    </tr>

		<tr>
		<td><label>Select the type of user</label></td>
		<td><select name="type">
		       <option value="">Select</option>
               <option value="0" <?php if ($_smarty_tpl->tpl_vars['cached']->value->type==0){?> selected="selected"<?php }?>>Student</option>
               <option value="2" <?php if ($_smarty_tpl->tpl_vars['cached']->value->type==2){?> selected="selected"<?php }?>>Teacher</option>
               <option value="1" <?php if ($_smarty_tpl->tpl_vars['cached']->value->type==1){?> selected="selected"<?php }?>>Admin</option>
        </select></td>
		</tr>

	    <tr class="submit_btn">
		<td colspan="2">
		    <p class="submit"><input type="submit" name="submit" id="submit" value="Add User" /></p>
		</td>
	    </tr>
	</table>
    </form>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>