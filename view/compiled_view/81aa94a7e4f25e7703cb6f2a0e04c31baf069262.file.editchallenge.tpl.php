<?php /* Smarty version Smarty-3.1.8, created on 2015-03-01 14:07:56
         compiled from "/var/www/html/hackademic/admin/view/editchallenge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126818174554f2cfe41ead42-71938779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81aa94a7e4f25e7703cb6f2a0e04c31baf069262' => 
    array (
      0 => '/var/www/html/hackademic/admin/view/editchallenge.tpl',
      1 => 1425138122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126818174554f2cfe41ead42-71938779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_root_path' => 0,
    'challenge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f2cfe4234218_76786653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f2cfe4234218_76786653')) {function content_54f2cfe4234218_76786653($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
        <div class="page_title"><h3 class="left">Edit Challenge</h3></div>
    </div><br/>
	 <div id="usermessage"><?php echo $_smarty_tpl->getSubTemplate ("_usermessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
	  <div id="input_form">
    <form id="form" name="form" method="post">
	<table class="article_main">
	<tr><td>
		   	<p class="submit left" id="try_me"><a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
admin/pages/editcode.php?id=<?php echo $_smarty_tpl->tpl_vars['challenge']->value->id;?>
" name="submit">Edit Code</a></p></td>
		</tr>
	    <tr>
		<td><label for="name">Title</label></td>
		<td><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['challenge']->value->title;?>
"/></td>
	    </tr>
	    <tr>
		<td><label for="name">Description</label></td>
	    </tr>
	    <tr>
                <td colspan="2">
                    <textarea name="description" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['challenge']->value->description;?>
</textarea>
                </td>
            </tr>
		
		
		<tr>
		<td><label for="visibility">Visibility</label></td>
		<td><select name="visibility">
			    <?php if ($_smarty_tpl->tpl_vars['challenge']->value->visibility=="public"){?>
               <option value="public" selected="selected">Public</option>
			   <option value="private" >Private</option>
			   <?php }else{ ?>
               <option value="private" selected="selected">Private</option>
			   <option value="public" >Public</option>
			   <?php }?>
			   </select></td>
		</tr>
		<tr>
		<td><label for="visibility">Availability</label></td>
		<td><select name="availability">
			    <?php if ($_smarty_tpl->tpl_vars['challenge']->value->availability=="public"){?>
               <option value="public" selected="selected">Public</option>
			   <option value="private" >Private</option>
			   <?php }else{ ?>
               <option value="private" selected="selected">Private</option>
			   <option value="public" >Public</option>
			   <?php }?>
			   </select></td>
		
		</tr>
		<tr>
		<td><label for="publish">Published</label></td>
		<td><select name="publish">
			    <?php if ($_smarty_tpl->tpl_vars['challenge']->value->publish==0){?>
               <option value="0" selected="selected">Not published</option>
			   <option value="1" >Publish</option>
			   <?php }else{ ?>
               <option value="1" selected="selected">Publish</option>
			   <option value="0" >Public</option>
			   <?php }?>
			   </select></td>
		</tr>
		 <tr>
		<td><label for="name">Level</label></td>
		<td><input type="text" name="level" value="<?php echo $_smarty_tpl->tpl_vars['challenge']->value->level;?>
"/></td>
		</tr>
		 <tr>
		<td><label for="name">Duration(minutes)</label></td>
		<td><input type="text" name="duration" value="<?php echo $_smarty_tpl->tpl_vars['challenge']->value->duration;?>
"/></td>
		</tr>
		<tr>
		    <td>
			<p class="submit"><input type="submit" name="submit" value="Update Challenge Details" /></p>
		    </td>
		    <td>
		  </td>
		</tr>
	    
</table>

</form>		
</div>
</div>
	   
<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>