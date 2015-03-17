<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:09:10
         compiled from "/var/www/html/sud/hackception-anokha15/view/mainlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26978504154f4841ed0f5c7-47051296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23b32d2e63f709711ecbeb87db6f00537aa7d4c9' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/view/mainlogin.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26978504154f4841ed0f5c7-47051296',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f4841ed29a09_57222742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f4841ed29a09_57222742')) {function content_54f4841ed29a09_57222742($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div style="width:80%; margin:auto">
<?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>