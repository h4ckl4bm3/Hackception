<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:03:11
         compiled from "/var/www/hackception/admin/view/articlemanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105514851954f5b817a27061-77023049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf0418bbd684372ad63fe0315763ea0bc1b53a7' => 
    array (
      0 => '/var/www/hackception/admin/view/articlemanager.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105514851954f5b817a27061-77023049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b817ab1fe2_88300445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b817ab1fe2_88300445')) {function content_54f5b817ab1fe2_88300445($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/hackception/extlib/Smarty-3.1.8/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
assets/css/pagination.css"/>

<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Article Manager</h3></div>
    </div><br/>
    
    <div id="input_form">
	<form method ="get">
	    <table class="add_form center">
		<tr>
		    <td class="width_40">Search:  <input class="width_90" type="text" name="search" id="search" placeholder="Search Text"/></td>
		    <td class="width_10">Sort By:</td>
		    <td class="width_25">
			  <select name="category" class="width_90">
			    <option value="title">Title</option> 
			    <option value="created_by">Author</option> 
			    <option value="last_modified_by">Last modified by</option> 
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
	    <th align = "left">Title</th>
	    <th align = "left">Date posted</th>
	    <th align = "left">Author</th>
	    <th align = "left">Last Modified</th>
	    <th align = "left">Last modified by</th>
	    <th align = "left">Published</th>
	</thead>
	<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
	    <tr>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/editarticle.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
</a></td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->date_posted);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['article']->value->created_by;?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['article']->value->last_modified){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->last_modified);?>
<?php }else{ ?>-<?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['article']->value->last_modified){?><?php echo $_smarty_tpl->tpl_vars['article']->value->last_modified_by;?>
<?php }else{ ?>-<?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['article']->value->is_published){?>Yes<?php }else{ ?>No<?php }?></td>
	    </tr>
	<?php } ?>
    </table>
	 
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>