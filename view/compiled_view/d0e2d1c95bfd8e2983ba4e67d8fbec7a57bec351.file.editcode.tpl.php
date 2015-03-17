<?php /* Smarty version Smarty-3.1.8, created on 2015-03-01 14:12:23
         compiled from "/var/www/html/hackademic/admin/view/editcode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24918004954f2d0ef297e71-60987284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e2d1c95bfd8e2983ba4e67d8fbec7a57bec351' => 
    array (
      0 => '/var/www/html/hackademic/admin/view/editcode.tpl',
      1 => 1425138122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24918004954f2d0ef297e71-60987284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'file_contents' => 0,
    'site_root_path' => 0,
    'folder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f2d0ef2c1e79_68137839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f2d0ef2c1e79_68137839')) {function content_54f2d0ef2c1e79_68137839($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_content">
    <div class="header_bar">
        <div class="page_title"><h3 class="left">Edit Code - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    <div id="input_form">
        <form id="form" name="form" method="post">
            <table class="article_main">
                <tr>
                    <td>
                        <label for="name">
                            This section allows you to only edit the challenge index.php file.
                            To edit other parts of the challenge, its recommended that you download the challenge,
                            and reupload it once you have made the necessary changes.
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="code" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['file_contents']->value;?>
</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="submit"><input type="submit" name="submit" value="Submit" /></p>
                    </td>
                    <td>
		     	<p class="submit right" id="try_me" style="width: 130px">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/download.php?ch=<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" name="submit">Download Challange</a>
                        </p>
                    </td>
                </tr>
            </table>
        </form>		
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>