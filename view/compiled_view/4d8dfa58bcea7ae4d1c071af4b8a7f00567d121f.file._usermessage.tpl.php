<?php /* Smarty version Smarty-3.1.8, created on 2015-02-28 21:14:22
         compiled from "/var/www/html/hackademic/admin/view/_usermessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181784391454f1e2560c4392-10230729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d8dfa58bcea7ae4d1c071af4b8a7f00567d121f' => 
    array (
      0 => '/var/www/html/hackademic/admin/view/_usermessage.tpl',
      1 => 1425138122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181784391454f1e2560c4392-10230729',
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
  'unifunc' => 'content_54f1e2560cf739_78371321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f1e2560cf739_78371321')) {function content_54f1e2560cf739_78371321($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['successmsg']->value)&&$_smarty_tpl->tpl_vars['successmsg']->value!=''){?>
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