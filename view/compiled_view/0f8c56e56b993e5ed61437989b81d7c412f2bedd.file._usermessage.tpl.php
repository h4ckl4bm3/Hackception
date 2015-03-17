<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:02:33
         compiled from "/var/www/hackception/admin/view/_usermessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2244861054f5b7f1a11da7-59412330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f8c56e56b993e5ed61437989b81d7c412f2bedd' => 
    array (
      0 => '/var/www/hackception/admin/view/_usermessage.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2244861054f5b7f1a11da7-59412330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'successmsg' => 0,
    'errormsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b7f1a299f9_16570976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b7f1a299f9_16570976')) {function content_54f5b7f1a299f9_16570976($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['successmsg']->value)&&$_smarty_tpl->tpl_vars['successmsg']->value!=''){?>
    <p class="successmsg text_center">
        <?php echo $_smarty_tpl->tpl_vars['successmsg']->value;?>

    </p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errormsg']->value)){?>
    <p class="errormsg text_center">
       <?php echo $_smarty_tpl->tpl_vars['errormsg']->value;?>

    </p>
<?php }?>
<?php }} ?>