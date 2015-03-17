<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:14:24
         compiled from "/var/www/html/sud/hackception-anokha15/admin/view/classchallenges.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209631640854f48558bf1917-90284612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb91f69c9219c30ee0c465d77fd34d1f61276e90' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/admin/view/classchallenges.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209631640854f48558bf1917-90284612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'classes' => 0,
    'class' => 0,
    'class_memberships' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f48558c42263_00401023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f48558c42263_00401023')) {function content_54f48558c42263_00401023($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/pagination.css"/>
<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Class Membership - Challenges</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    
    <div id="input_form">
       <form method="post">
	    <table class="add_form">
	        <tr>
		    <td><label> Add challenge to class: </label></td>
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
admin/pages/classchallenges.php?id=<?php echo $_GET['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['class']->value['class_id'];?>
&action=del">Delete</a></td>
	    </tr>
	<?php } ?> 			
    </table>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>