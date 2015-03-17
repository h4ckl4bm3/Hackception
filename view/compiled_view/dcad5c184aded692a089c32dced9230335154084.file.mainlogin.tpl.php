<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:02:55
         compiled from "/var/www/hackception/view/mainlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206915156254f5b8078b7367-55954632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcad5c184aded692a089c32dced9230335154084' => 
    array (
      0 => '/var/www/hackception/view/mainlogin.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206915156254f5b8078b7367-55954632',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b8078f0424_39130235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b8078f0424_39130235')) {function content_54f5b8078f0424_39130235($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div style="width:80%; margin:auto">
<?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>