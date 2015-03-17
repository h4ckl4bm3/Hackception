<?php /* Smarty version Smarty-3.1.8, created on 2015-03-01 01:31:51
         compiled from "/var/www/html/hackademic/view/challenge_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61988407554f2199b7afd15-37826498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9952f6b2d4aee1ea85b7979f142356a5e10a7e0' => 
    array (
      0 => '/var/www/html/hackademic/view/challenge_list.tpl',
      1 => 1425153705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61988407554f2199b7afd15-37826498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f2199b7f30c7_03284272',
  'variables' => 
  array (
    'list' => 0,
    'class_name' => 0,
    'class_challenges' => 0,
    'foo' => 0,
    'site_root_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f2199b7f30c7_03284272')) {function content_54f2199b7f30c7_03284272($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_content">
    <div class="header_bar">
	<div class="page_title"><h3 class="left">Challenges</h3></div>
    </div><br/>
    <ul style="list-style: none;">
        <?php  $_smarty_tpl->tpl_vars['class_challenges'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class_challenges']->_loop = false;
 $_smarty_tpl->tpl_vars['class_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class_challenges']->key => $_smarty_tpl->tpl_vars['class_challenges']->value){
$_smarty_tpl->tpl_vars['class_challenges']->_loop = true;
 $_smarty_tpl->tpl_vars['class_name']->value = $_smarty_tpl->tpl_vars['class_challenges']->key;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>

					<ul style="list-style: none;">

						<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
            <li style="margin-top: 10px; margin-bottom: 10px;">
            <?php if ($_smarty_tpl->tpl_vars['foo']->value['availability']=='public'||$_smarty_tpl->tpl_vars['foo']->value['class']==true){?>
                <a class="width100" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/showchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['class_id'];?>
" style="color:green;">
            <?php }?>
                    <span class="padding_menu"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</span>
                </a>
            </li>
        <?php } ?>
        </ul></li>
        <?php } ?>
    </ul>
</div>



<?php }} ?>