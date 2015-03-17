<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:07:41
         compiled from "/var/www/hackception/admin/view/classmembership.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165510829554f5b92505b1b1-18512957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b811b389761a66cefecbac15800acc57db41c507' => 
    array (
      0 => '/var/www/hackception/admin/view/classmembership.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165510829554f5b92505b1b1-18512957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'user' => 0,
    'classes' => 0,
    'class' => 0,
    'class_memberships' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b9250c7973_75649238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b9250c7973_75649238')) {function content_54f5b9250c7973_75649238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/pagination.css"/>
<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Class Membership - Users <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>

    <div id="input_form">
       <form method="post">
	    <table class="add_form">
	        <tr>
		    <td><label> Add user to class: </label></td>
		    <td>
			<select name="class_id">
			    <?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->name;?>
</option>
			    <?php } ?>
			</select>
		    </td>
		    <td colspan="2">
			<p class="submit"><input type="submit" name="submit" id="submit" value="Add" /></p>
		    </td>
		</tr>
	    </table>
        </form>
    </div>
    <table class="manager_table">
	<thead>
	    <th>Class name</th>
	    <th>Delete</th>
	</thead>
	<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_memberships']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
	    <tr>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/showclass.php?id=<?php echo $_smarty_tpl->tpl_vars['class']->value['class_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</a></td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/classmemberships.php?id=<?php echo $_GET['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['class']->value['class_id'];?>
&action=del">Delete</a></td>
	    </tr>
	<?php } ?>
    </table>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>