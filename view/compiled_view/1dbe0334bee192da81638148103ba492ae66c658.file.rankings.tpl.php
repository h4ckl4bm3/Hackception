<?php /* Smarty version Smarty-3.1.8, created on 2015-03-06 11:05:04
         compiled from "/var/www/hackception/view/rankings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137018072954f5b94b6333a7-45784767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dbe0334bee192da81638148103ba492ae66c658' => 
    array (
      0 => '/var/www/hackception/view/rankings.tpl',
      1 => 1425620046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137018072954f5b94b6333a7-45784767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b94b6bfb24_01249185',
  'variables' => 
  array (
    'is_logged_in' => 0,
    'classes' => 0,
    'cls' => 0,
    'rankings' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b94b6bfb24_01249185')) {function content_54f5b94b6bfb24_01249185($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class ="main_content" align="center" style="margin:0 0 0 -100% ;">
    <div class="header_bar">
	<div class="page_title"><h3 class="center" style="padding: 12px 0 0 0;">RANKINGS</h3></div>
    </div><br/>
    <?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)){?>
    <div class="center">
	<div id="input_form" style="width: 80%; margin:auto;">
	    <form type="GET">
		<table class="add_form center">
		    <tr>
			<td style="width:25%"><label>Select Class:</label></td>
			<td>
			    <select name="class" style="width:100%">
				<?php  $_smarty_tpl->tpl_vars['cls'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cls']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cls']->key => $_smarty_tpl->tpl_vars['cls']->value){
$_smarty_tpl->tpl_vars['cls']->_loop = true;
?>
				    <option value="<?php echo $_smarty_tpl->tpl_vars['cls']->value->id;?>
" <?php if (isset($_GET['class'])&&$_smarty_tpl->tpl_vars['cls']->value->id==$_GET['class']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cls']->value->name;?>
</option>
				<?php } ?>
			    </select>
			</td>
			<td class="submit_btn"><p class="submit"><input class="try_me" type="submit" value="Search" /></p></td>
		    </tr>
		</table>
	    </form>
	</div>
    </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['rankings']->value))){?>
    <table class="manager_table">
        <tr>
            <th>Username</th>
            <th>Challenges Cleared</th>
						<th>Rank</th>
						<th>Total Points</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rankings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['count'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['rank'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['score'];?>
</td>
        </tr>
    <?php } ?>
    </table>
    <?php }?>
</div>

<?php }} ?>