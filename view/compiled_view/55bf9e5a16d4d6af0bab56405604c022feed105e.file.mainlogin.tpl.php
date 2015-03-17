<?php /* Smarty version Smarty-3.1.8, created on 2015-03-01 00:16:15
         compiled from "/var/www/html/hackademic/view/mainlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118090837554f20cf7d35aa9-62227927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55bf9e5a16d4d6af0bab56405604c022feed105e' => 
    array (
      0 => '/var/www/html/hackademic/view/mainlogin.tpl',
      1 => 1425146268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118090837554f20cf7d35aa9-62227927',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f20cf7d44ec7_67427083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f20cf7d44ec7_67427083')) {function content_54f20cf7d44ec7_67427083($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div style="width:80%; margin:auto">
<?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>