<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:09:30
         compiled from "/var/www/html/sud/hackception-anokha15/admin/view/usermanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59879277854f48432538465-89475165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560a65cab9d4fcb9141f3745560249fd2bf4c698' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/admin/view/usermanager.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59879277854f48432538465-89475165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f484325a2311_03366688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f484325a2311_03366688')) {function content_54f484325a2311_03366688($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/sud/hackception-anokha15/extlib/Smarty-3.1.8/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/pagination.css"/>

<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">User Manager</h3></div>
	<div id="" class="right action_button">
	    
	    <table>
		<tr class="center">
		    <td>
			<div class="submenu_btn">
			    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/adduser.php">
				<img class="action_image" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/adduser.png"/><br/>
				<span class="caption">Add User</span>
			    </a>
			</div>
		    </td>
		    <td>
			<div class="submenu_btn">
			    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/addclass.php">
				<img class="action_image" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/addclass.png"/><br/>
				<span class="caption">Add Class</span>
			    </a>
			</div>
		    </td>
		    <td>
			<div class="submenu_btn">
			    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/manageclass.php">
				<img class="action_image" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/manageclass.png"/><br/>
				<span class="caption">Class Manager</span>
			    </a>
			</div>
		    </td>
		</tr>
	    </table>
	</div>
    </div><br/>
    
    <div id="input_form">
	<form method ="get">
	    <table class="add_form center">
		<tr>
		    <td class="width_40">Search:  <input class="width_90" type="text" name="search" id="search" placeholder="Search Text"/></td>
			<td class="width_10">Sort By:</td>
		    <td class="width_25">
			<select name="category" class="width_90">
			    <option value="username">Username</option> 
			    <option value="full_name">Full Name</option> 
			    <option value="email">Email</option> 
			</select>
		    </td>
			<td >Show:</td>
			<td class="width_25">
			  <select name="limit" class="width_90">
	             <option value="">Results Per Page</option>
                 <option value="5">5</option>
				 <option value="10">10</option>
				 <option value="15">15</option>
				 <option value="20">20</option>
				 <option value="25">25</option>
				 <option value="30">30</option>
				 <option value="40">40</option>
				 <option value="50">50</option>
				 <option value="75">75</option>
				 <option value="100">100</option>
        	   </select>
		     </td>
		    <td class="submit_btn width_10">
			<p class="submit"><input type="submit" name="submit" id="submit" value="Submit" /></p>
		    </td>
		</tr>
	    </table>
	</form>
    </div>
    
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    <div id="paginate_div"><?php echo $_smarty_tpl->getSubTemplate ("_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    
    <table class="manager_table">
	<thead>
	    <th align = "left"> Username </th>
	    <th align = "left">Full Name</th>
	    <th align = "left">Email</th>
	    <th align = "left">Classes</th>
	    <th align = "left">Joined</th>
	    <th align = "left">Last Visit</th>
	    <th align = "left">Activated</th>
	    <th align = "left">Type Of User</th>
	</thead>
	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
	    <tr>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/edituser.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
		<td>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/classmemberships.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Edit</a>
		</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->joined);?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value->last_visit){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->last_visit);?>
<?php }else{ ?>Never<?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value->is_activated){?>Yes<?php }else{ ?>No<?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value->type==1){?>Admin<?php }elseif($_smarty_tpl->tpl_vars['user']->value->type==2){?>Teacher<?php }else{ ?>Student<?php }?></td>
	   </tr>
	<?php } ?>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>