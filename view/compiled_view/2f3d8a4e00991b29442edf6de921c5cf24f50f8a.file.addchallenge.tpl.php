<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:03:14
         compiled from "/var/www/hackception/admin/view/addchallenge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167045604154f5b81b011e86-77795868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3d8a4e00991b29442edf6de921c5cf24f50f8a' => 
    array (
      0 => '/var/www/hackception/admin/view/addchallenge.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167045604154f5b81b011e86-77795868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'finish' => 0,
    'type' => 0,
    'step' => 0,
    'cached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b81b09bfa0_90000088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b81b09bfa0_90000088')) {function content_54f5b81b09bfa0_90000088($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
        <div class="page_title"><h3 class="left">Add Challenge</h3></div>
    </div><br/>
    <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['finish']->value)||(isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value=="challenge")||(isset($_smarty_tpl->tpl_vars['step']->value)&&$_smarty_tpl->tpl_vars['step']->value=="step2")){?>
    <div id="upload_container">
        <form id="input_form" enctype="multipart/form-data" action="" method="post">
            <?php if (isset($_smarty_tpl->tpl_vars['finish']->value)||(isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value=="challenge")){?>
                <label>Select a Challenge zip file to upload (or <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/addchallenge.php?type=code">Upload Code</a> only)</label><br/><br/>
            <?php }else{ ?>
                <label>Upload Challenge Code Zip File</label><br/><br/>
            <?php }?>
            <input type="file" name="fupload" />
            <p class="submit"><input type="submit" value="Upload Zip File" /></p>
        </form>
    </div>
    <?php }else{ ?>
        <div id="input_form">
            <form id="form" name="form" method="post">
                <table class="article_main">
                    <tr>
                        <td colspan="2">
                            <label>Enter Challenge Details (or <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/addchallenge.php">Upload Challenge</a> directly)</label><br/><br/>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="name">Title</label></td>
                        <td><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->title;?>
"/><br/><br/></td>
                    </tr>
                    <tr>
                        <td><label for="name">Authors</label></td>
                        <td><input type="text" name="authors" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->authors;?>
"/><br/><br/></td>
                    </tr>
                    <tr>
                        <td><label for="name">Category</label></td>
                        <td><input type="text" name="category" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->category;?>
"/><br/><br/></td>
                    </tr>
		    <tr>
                        <td><label for="name">Level</label></td>
                        <td><input type="text" name="level" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->level;?>
"/><br/><br/></td>
                    </tr>
                    <tr>
                        <td><label for="name">Duration</label></td>
                        <td><input type="text" name="duration"placeholder="minutes" value="<?php echo $_smarty_tpl->tpl_vars['cached']->value->duration;?>
"/><br/><br/></td>
                    </tr>
                    <tr>
                        <td><label for="name">Description</label></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea name="description" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['cached']->value->description;?>
</textarea><br/><br/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <p class="submit"><input type="submit" name="continue" value="Continue" /></p>
                        </td>
                    </tr>
                </table>
            </form>		
        </div>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>