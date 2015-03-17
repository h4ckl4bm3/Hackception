<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:14:55
         compiled from "/var/www/html/sud/hackception-anokha15/admin/view/edituser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122420671054f48577343073-54417452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672280ca0b5037dfe3f6e7a757626cec384f769c' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/admin/view/edituser.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122420671054f48577343073-54417452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f4857737bfb0_08047309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f4857737bfb0_08047309')) {function content_54f4857737bfb0_08047309($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Edit User</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    
    <div id="input_form">
    <form id="form" name="form" method="post">
	<table class="user_add">
	    <tr>
		<td><label for="name">Username</label></td>
		<td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" readonly="readonly"/></td>
	    </tr>
	    
	    <tr>
		<td><label>Full Name</label></td>
		<td><input type="text" name="full_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
"/></td>
	    </tr>
	    
	    <tr>
		<td><label>Email</label></td>
		<td><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"/></td>
	    </tr>
	    
	    <tr>
		<td><label>Password</label></td>
		<td><input type="password" name="password" id="password"/></td>
	    </tr>
		    
	    <tr>
		<td><label>Activate User</label></td>
		<td class="radio">
		    <?php if ($_smarty_tpl->tpl_vars['user']->value->is_activated){?>
			<input type="radio" name="is_activated" value="1" checked="true" />Yes
			<input type="radio" name="is_activated" value="0" />No
		    <?php }else{ ?>
			<input type="radio" name="is_activated" value="1"  />Yes
			<input type="radio" name="is_activated" value="0" checked="true" />No
		    <?php }?>
		</td>
	    </tr>
	    
		<tr>
		<td><label>Select the type of user</label></td>
		<td><select name="type">
			    <?php if ($_smarty_tpl->tpl_vars['user']->value->type==0){?>
               <option value="0" selected="selected">Student</option>
			   <option value="1" >Admin</option>
			   <option value="2" >Teacher</option>
			   <?php }elseif($_smarty_tpl->tpl_vars['user']->value->type==2){?>
               <option value="2" selected="selected">Teacher</option>
			   <option value="1" >Admin</option>
			   <option value="0" >Student</option>
			   <?php }else{ ?>
               <option value="1" selected="selected">Admin</option>
			   <option value="2" >Teacher</option>
			   <option value="0" >Student</option>
			   <?php }?>
			   
        </select></td>
		</tr>
	    
	    <tr class="submit_btn">
		<td colspan="2">
		    <p class="submit">
			<input type="submit" name="submit" id="submit" value="Edit User" />
			<input type="submit" name="deletesubmit" id="deletesubmit" value="Delete User" />
		    </p>
		</td>
	    </tr>
	</table>
    </form>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>