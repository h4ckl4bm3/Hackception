<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:09:04
         compiled from "/var/www/html/sud/hackception-anokha15/admin/view/_usermessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168837756954f484182bbea3-50736722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d71d3fe3b39dbad32f62a7f2176e03e238fba8' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/admin/view/_usermessage.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168837756954f484182bbea3-50736722',
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
  'unifunc' => 'content_54f484182d13b7_41833007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f484182d13b7_41833007')) {function content_54f484182d13b7_41833007($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['successmsg']->value)&&$_smarty_tpl->tpl_vars['successmsg']->value!=''){?>
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