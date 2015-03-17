<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 21:09:04
         compiled from "/var/www/html/sud/hackception-anokha15/view/landingpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49938124754f48418179cf0-94541216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d27f863f7831cdd2b52a72276aff6ac8d4a6aad' => 
    array (
      0 => '/var/www/html/sud/hackception-anokha15/view/landingpage.tpl',
      1 => 1425310622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49938124754f48418179cf0-94541216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'site_root_path' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f4841824efb7_70296455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f4841824efb7_70296455')) {function content_54f4841824efb7_70296455($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/sud/hackception-anokha15/extlib/Smarty-3.1.8/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/sud/hackception-anokha15/extlib/Smarty-3.1.8/libs/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("_header_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--<table id="articleTable">
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
    <tr>
        <td>
            <!--<h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/readarticle.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
</a></h3>
            <div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->date_posted);?>
</div>-->
        </td>
    </tr>
    <tr>
        <!--<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value->content,500);?>
<br/><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/readarticle.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value->id;?>
">Read More</a><hr/></td>
    </tr>
<?php } ?>
</table>-->

<div id="paginate_div"><?php echo $_smarty_tpl->getSubTemplate ("_pagination_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<script type="text/javascript">
	if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)){
	  //  alert('you are browsing with firefox');
	}
        if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){
           // alert('you are browsing with ie');
        }
        if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)){
            //alert('you are browsing with opera browser');
        }
         if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)){
            //alert('you are browsing with chrome browser');
        }
</script>
<?php echo $_smarty_tpl->getSubTemplate ("_footer_frontend.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>