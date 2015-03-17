<?php /* Smarty version Smarty-3.1.8, created on 2015-03-04 15:50:32
         compiled from "/var/www/hackception/admin/view/showclass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140563388554f6dc7072cfa2-21978110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd502864e24db3757a1f199e60dff2c837baeb763' => 
    array (
      0 => '/var/www/hackception/admin/view/showclass.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140563388554f6dc7072cfa2-21978110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'class' => 0,
    'challenges_not_assigned' => 0,
    'challenge' => 0,
    'users' => 0,
    'user' => 0,
    'challenges' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f6dc707d9324_54436878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6dc707d9324_54436878')) {function content_54f6dc707d9324_54436878($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/pagination.css"/>
<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Class Memberships - <?php echo $_smarty_tpl->tpl_vars['class']->value->name;?>
</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>

   <form id="form" name="form" method="post">
      <table class="manager_table">
              <tr>
		     <td><label>Name:  </label></td>
		     <td><input type="text" name="updateclassname" value="<?php echo $_smarty_tpl->tpl_vars['class']->value->name;?>
"/></td>

                  <td colspan="2">
		        <p class="submit">

		        </p>
		      </td>
		      <td>

		<!--<a href="challengemanager.php">Add challenges</a>-->
		<select name="challenges" class="width_90">
			    <option value="default">Add challenges</option>
			    <?php  $_smarty_tpl->tpl_vars['challenge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['challenge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['challenges_not_assigned']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['challenge']->key => $_smarty_tpl->tpl_vars['challenge']->value){
$_smarty_tpl->tpl_vars['challenge']->_loop = true;
?>
			    <option value="<?php echo $_smarty_tpl->tpl_vars['challenge']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['challenge']->value['title'];?>
</option>
			    <?php } ?>
			</select>
	    </td>
	     <td class="submit_btn width_10">
			<p class="submit"><input type="submit" name="submit" id="submit" value="Update" /></p>
		    </td>

	     <td>
		<a href="usermanager.php">Add users</a>
	    </td>
	    </tr>
	    <tr></tr>
      </table>
   </form>
    <table class="manager_table">
	  <thead>
	    <th>Username</th>
	    <th>Remove</th>
	</thead>
	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
	    <tr>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/showclass.php?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['class']->value->id;?>
&action=del">Remove</a></td>
	    </tr>
	<?php } ?>
    </table>
    <br/><br/>
    <table class="manager_table">
	<thead>
	    <th>Challenge</th>
	    <th>Remove</th>
	    <th>Edit Scoring Rules</th>
	</thead>
	<?php  $_smarty_tpl->tpl_vars['challenge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['challenge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['challenge']->key => $_smarty_tpl->tpl_vars['challenge']->value){
$_smarty_tpl->tpl_vars['challenge']->_loop = true;
?>
	    <tr>
		<td><?php echo $_smarty_tpl->tpl_vars['challenge']->value['title'];?>
</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/showclass.php?cid=<?php echo $_smarty_tpl->tpl_vars['challenge']->value['challenge_id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['class']->value->id;?>
&action=del">Remove</a></td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/scoringrules.php?cid=<?php echo $_smarty_tpl->tpl_vars['challenge']->value['challenge_id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['class']->value->id;?>
">Edit</a></td>
	    </tr>
	<?php } ?>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>