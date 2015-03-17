<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:03:03
         compiled from "/var/www/hackception/admin/view/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197843679954f5b80f70e610-86778937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab7391869383bf4efdb0d5c008df42041aacd95a' => 
    array (
      0 => '/var/www/hackception/admin/view/dashboard.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197843679954f5b80f70e610-86778937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b80f7641a9_13390703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b80f7641a9_13390703')) {function content_54f5b80f7641a9_13390703($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Dashboard</h3></div>
    </div><br/>

    <table id="dashboard_table">
	<tr>
	    <td>
		<p>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/addarticle.php"  title="add article">
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/addarticle.jpg"/></p>
			Add New Article
		    </a>
		</p>
	    </td>
	    <td>
		<p>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/articlemanager.php" title="articlemanager">
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/articlemanager.jpg"/></p>
			Article Manager
		    </a>
		</p>
	    </td>
	    <td>
		<p>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/usermanager.php" title="add user">
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/usermanager.jpg"/></p>
			User Manager
		    </a>
		</p>
	    </td>
	</tr>
	<tr>
	    <td>
		<p>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/addchallenge.php" title="add challenge">
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/addchallenge2.PNG"/></p>
			Add New Challenge
		    </a>
		</p>
	    </td>
	    <td>
		<p>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/challengemanager.php" title="challenge manager">
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/challengemanager.jpg"/></p>
			Challenge Manager
		    </a>
		</p>
	    </td>
	   <!-- <td>
		<p>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/globalconfiguration.php" title="configuration">
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/assets/images/configuration.jpg"/></p>
			Configuration
		    </a>
		</p>
	    </td>-->
	</tr>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>