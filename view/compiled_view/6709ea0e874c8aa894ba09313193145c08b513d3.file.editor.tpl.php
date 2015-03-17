<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:03:26
         compiled from "/var/www/hackception/admin/view/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148846512454f5b8261305a9-15938047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6709ea0e874c8aa894ba09313193145c08b513d3' => 
    array (
      0 => '/var/www/hackception/admin/view/editor.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148846512454f5b8261305a9-15938047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'cached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b826177218_81800117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b826177218_81800117')) {function content_54f5b826177218_81800117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
extlib/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
    // General options
    mode : "textareas",
    theme : "advanced",
    plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

    // Theme options
    theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "bottom",
    theme_advanced_resizing : true,

    // Skin options
    skin : "o2k7",
    skin_variant : "silver",

    // Example content CSS (should be your site CSS)
    content_css : "css/example.css",

    // Drop lists for link/image/media/template dialogs
    template_external_list_url : "js/template_list.js",
    external_link_list_url : "js/link_list.js",
    external_image_list_url : "js/image_list.js",
    media_external_list_url : "js/media_list.js",

    // Replace values for the template plugin
    template_replace_values : {
            username : "Some User",
            staffid : "991234"
    }
});
</script>
<div class="main_content">
    <div class="header_bar">
        <div class="page_title"><h3 class="left">Add New Article</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    
    <div id="input_form">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/addarticle.php">
        <table class="article_main">
            <tr>
                <td class="bottom"><label>Title</label></td>
                <td class="bottom"><input type="text"name="title" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->title;?>
"/></td>
            </tr>
            <tr>
                <td><label>Publish Article</label></td>
                <td class="radio">
                    <input type="radio" name="is_published" value="1"  />Yes
                    <input type="radio" name="is_published" value="0" />No
                </td>
            </tr>
            <tr>
                <td colspan=2"><label>Write your Article</label></td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['cached']->value->article;?>
</textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="submit"><input type="submit" name="submit" id="submit" value="Submit" /></p>
                </td>
            </tr>
        </table>
    </form>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>