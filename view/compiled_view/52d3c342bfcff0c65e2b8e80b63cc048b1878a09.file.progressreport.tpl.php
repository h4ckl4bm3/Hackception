<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:16:34
         compiled from "/var/www/html/sud/hackception-anokha15/view/progressreport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180880927454f485da4ec5f7-21533568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52d3c342bfcff0c65e2b8e80b63cc048b1878a09' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/view/progressreport.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180880927454f485da4ec5f7-21533568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_box' => 0,
    'data' => 0,
    'class' => 0,
    'progress' => 0,
    'site_root_path' => 0,
    'foo' => 0,
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f485da5539e3_34064638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f485da5539e3_34064638')) {function content_54f485da5539e3_34064638($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_content" align="center" style="margin:0 0 0 -100% ;">
    <div class="header_bar">
	<div class="page_title"><h3 class="center" style="padding: 12px 0 0 0;">PROGRESS REPORT</h3></div>
    </div><br/>
    <?php if (isset($_smarty_tpl->tpl_vars['search_box']->value)){?>
	<div class="center">
	    <div id="input_form" style="width: 80%; margin:auto;">
		<form type="GET">
		    <table class="add_form center">
			<tr>
			    <td style="width:25%"><label>Enter a name to search:</label></td>
			    <td><input type="text" name="username" style="width:80%" value="<?php if (isset($_GET['username'])){?><?php echo $_GET['username'];?>
<?php }?>"/></td>
			    <td class="submit_btn"><p class="submit"><input class="try_me" type="submit" value="Search" /></p></td>
			</tr>
		    </table>
		</form>
	    </div>
	</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['data']->value))){?>
    <table class="manager_table">
        <tr>
            <th>Title</th>
            <th>No. Of Attempts</th>
            <th>Cleared</th>
            <th>Cleared On</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['progress'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['progress']->_loop = false;
 $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['progress']->key => $_smarty_tpl->tpl_vars['progress']->value){
$_smarty_tpl->tpl_vars['progress']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['progress']->key;
?>
			<h4 class="align_center"><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
</h4>
			<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['progress']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/showchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
&class_id=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['ids']->value[$_tmp1];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</a></td>
            <td><?php if ($_smarty_tpl->tpl_vars['foo']->value['attempts']==0){?>Unattempted<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['foo']->value['attempts'];?>
<?php }?></td>
            <td><?php if ($_smarty_tpl->tpl_vars['foo']->value['attempts']==0){?>Not Cleared<?php }elseif($_smarty_tpl->tpl_vars['foo']->value['cleared']==false){?>Not Cleared<?php }else{ ?>Cleared<?php }?></td>
            <td><?php if ($_smarty_tpl->tpl_vars['foo']->value['cleared']==true){?><?php echo $_smarty_tpl->tpl_vars['foo']->value['cleared_on'];?>
<?php }else{ ?>Not Cleared<?php }?></td>
        </tr>
    <?php } ?>
    <?php } ?>
    </table>
    <?php }?>
</div>

<?php }} ?>