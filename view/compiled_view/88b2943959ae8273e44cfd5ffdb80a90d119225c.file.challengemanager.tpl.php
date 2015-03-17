<?php /* Smarty version Smarty-3.1.8, created on 2015-03-01 00:16:57
         compiled from "/var/www/html/hackademic/admin/view/challengemanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124016598954f20d21dab2a4-66941573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b2943959ae8273e44cfd5ffdb80a90d119225c' => 
    array (
      0 => '/var/www/html/hackademic/admin/view/challengemanager.tpl',
      1 => 1425138122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124016598954f20d21dab2a4-66941573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'challenges' => 0,
    'challenge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f20d21e0c359_17139031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f20d21e0c359_17139031')) {function content_54f20d21e0c359_17139031($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/hackademic/extlib/Smarty-3.1.8/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/pagination.css"/>

<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Challenge Manager</h3></div>
			<div id="" class="right action_button">
				<table>
				<tr class="center"><td></td></tr>
				<tr class="center">
				<td>
				<div class="submenu_btn">
    <a href="addchallenge.php?type=code">
    <span class="caption">Add Challenge</span></a></div></td></tr></table>
    </div></div><br/>
    <div id="input_form">
	<form method ="get">
	    <table class="add_form center">
		<tr><td>Search:</td>
		    <td class="width_40"> <input class="width_90" type="text" name="search" id="search"/></td>
			<td class="width_10">Order By:</td>
		    <td class="width_25">
			<select name="category" class="width_90">
			  <option value="title">Title</option>
			</select>
		    </td>
		    <td>Show:  </td>
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
			<p class="submit"><input type="submit" name="submit" id="submit" value="search" /></p>
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
	    <th align = "left">Challenge Title</th>
	    <th align = "left">Date posted</th>
	    <th align = "left">Visibility</th>
	    <th align = "left">Classes</th>
	    <th align = "left">Published</th>
	    <th align = "left">DELETE?</th>
	</thead>
	<?php  $_smarty_tpl->tpl_vars['challenge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['challenge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['challenge']->key => $_smarty_tpl->tpl_vars['challenge']->value){
$_smarty_tpl->tpl_vars['challenge']->_loop = true;
?>
	    <tr>
		<td>
		 <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/editchallenge.php?id=<?php echo $_smarty_tpl->tpl_vars['challenge']->value->id;?>
&action=update">
		 <?php echo $_smarty_tpl->tpl_vars['challenge']->value->title;?>
</a>
		</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['challenge']->value->date_posted);?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['challenge']->value->visibility=="public"){?>Public<?php }else{ ?>Private<?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['challenge']->value->visibility=="public"){?>N/A<?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/classchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['challenge']->value->id;?>
">Edit</a><?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['challenge']->value->publish==0){?>No<?php }else{ ?>Yes<?php }?></td>
		<td>   
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/challengemanager.php?id=<?php echo $_smarty_tpl->tpl_vars['challenge']->value->id;?>
&action=del">Delete challenge?</a>
		</td>			
	    </tr>
	<?php } ?>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>