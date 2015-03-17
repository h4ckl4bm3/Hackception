<?php /* Smarty version Smarty-3.1.8, created on 2015-03-01 14:24:58
         compiled from "/var/www/html/hackademic/view/showChallenge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81545098954f20d6e324159-07924949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c75bbe32cc1e0b36ef486afe24291714296132c' => 
    array (
      0 => '/var/www/html/hackademic/view/showChallenge.tpl',
      1 => 1425198132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81545098954f20d6e324159-07924949',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f20d6e353016_08858305',
  'variables' => 
  array (
    'challenge' => 0,
    'is_logged_in' => 0,
    'is_allowed' => 0,
    'site_root_path' => 0,
    'username' => 0,
    'class_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f20d6e353016_08858305')) {function content_54f20d6e353016_08858305($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left"><?php echo $_smarty_tpl->tpl_vars['challenge']->value->title;?>
</h3></div>
    </div><br/>
<table class="user_add show_challenge" style="height: auto;">
    <tr>
	<td><div class="description"><?php echo $_smarty_tpl->tpl_vars['challenge']->value->description;?>
<br/><hr/></div></td>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['is_allowed']->value)){?>
    <tr id="input_form">
	<td class="submit_btn">
	    <p class="submit"><a id="try_me" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/trychallenge.php?id=<?php echo $_smarty_tpl->tpl_vars['challenge']->value->id;?>
&user=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['class_id']->value;?>
">Try it!</a></p>
	</td>
    </tr>
    <?php }?>
</table>
</div>

<?php }} ?>