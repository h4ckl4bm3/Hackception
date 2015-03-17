<?php /* Smarty version Smarty-3.1.8, created on 2015-03-03 19:03:06
         compiled from "/var/www/hackception/admin/view/_pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35242039154f5b8122fe187-36254497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95b123d85f00e706f4bc0bbfc435b85a675cc029' => 
    array (
      0 => '/var/www/hackception/admin/view/_pagination.tpl',
      1 => 1425310623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35242039154f5b8122fe187-36254497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_pages' => 0,
    'pagination' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b812697a44_37265500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b812697a44_37265500')) {function content_54f5b812697a44_37265500($_smarty_tpl) {?><!-- <div><?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
 Results</div> -->
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['lastpage']>1){?>	
    <div class='paginate'>
    <!-- Previous -->
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']>1){?>
	<?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['prev'];?>
&limit=<?php echo $_GET['limit'];?>
">Previous</a>
        <?php }else{ ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['prev'];?>
">Previous</a>
        <?php }?>
    <?php }else{ ?>
	<span class='disabled'>Previous</span>
    <?php }?>
    <!-- Pages -->
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['lastpage']<7+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2)){?>
        <!-- Not enough pages to breaking it up -->
        <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int)ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? $_smarty_tpl->tpl_vars['pagination']->value['lastpage']+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagination']->value['lastpage'])+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0){
for ($_smarty_tpl->tpl_vars['counter']->value = 1, $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++){
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration == 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration == $_smarty_tpl->tpl_vars['counter']->total;?>
	    <?php if ($_smarty_tpl->tpl_vars['counter']->value==$_smarty_tpl->tpl_vars['pagination']->value['page']){?>
                <span class='current'><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span>
	    <?php }else{ ?>
		<?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
                <?php }else{ ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
                <?php }?>
            <?php }?>	
	<?php }} ?>
    <?php }elseif($_smarty_tpl->tpl_vars['pagination']->value['lastpage']>5+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2)){?>
        <!--  Enough pages to hide a few -->
	<!-- Beginning only hide later pages -->
	<?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']<1+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2)){?>
	    <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int)ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? (3+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2))+1 - (1) : 1-((3+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2)))+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0){
for ($_smarty_tpl->tpl_vars['counter']->value = 1, $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++){
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration == 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration == $_smarty_tpl->tpl_vars['counter']->total;?>
		<?php if ($_smarty_tpl->tpl_vars['counter']->value==$_smarty_tpl->tpl_vars['pagination']->value['page']){?>
                    <span class='current'><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span>
                <?php }else{ ?>
		    <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                        <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
                    <?php }else{ ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
		    <?php }?>
		<?php }?>
	    <?php }} ?>
            ...
	    <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
		<a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
</a>
	    <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
</a>
	    <?php }?>
            
            <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
</a>
	    <?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
</a>
	    <?php }?>
			
	<?php }elseif(((($_smarty_tpl->tpl_vars['pagination']->value['lastpage']-($_smarty_tpl->tpl_vars['pagination']->value['stages']*2))>$_smarty_tpl->tpl_vars['pagination']->value['page'])&&($_smarty_tpl->tpl_vars['pagination']->value['page']>($_smarty_tpl->tpl_vars['pagination']->value['stages']*2)))){?>
            <!-- Middle hide some front and some back -->
	    <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=1&limit=<?php echo $_GET['limit'];?>
">1</a>
	    <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=1">1</a>
	    <?php }?>
	
            <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=2&limit=<?php echo $_GET['limit'];?>
">2</a>
	    <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=2">2</a>
	    <?php }?>
            
	    ...
	    <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int)ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? ($_smarty_tpl->tpl_vars['pagination']->value['page']+$_smarty_tpl->tpl_vars['pagination']->value['stages'])+1 - (($_smarty_tpl->tpl_vars['pagination']->value['page']-$_smarty_tpl->tpl_vars['pagination']->value['stages'])) : ($_smarty_tpl->tpl_vars['pagination']->value['page']-$_smarty_tpl->tpl_vars['pagination']->value['stages'])-(($_smarty_tpl->tpl_vars['pagination']->value['page']+$_smarty_tpl->tpl_vars['pagination']->value['stages']))+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0){
for ($_smarty_tpl->tpl_vars['counter']->value = ($_smarty_tpl->tpl_vars['pagination']->value['page']-$_smarty_tpl->tpl_vars['pagination']->value['stages']), $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++){
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration == 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration == $_smarty_tpl->tpl_vars['counter']->total;?>
		<?php if ($_smarty_tpl->tpl_vars['counter']->value==$_smarty_tpl->tpl_vars['pagination']->value['page']){?>
		    <span class='current'><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span>
		<?php }else{ ?>
                    <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                        <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
                    <?php }else{ ?>
           		<a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
                    <?php }?>		
		<?php }?>
	    <?php }} ?>
	    ...
		<?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
</a>
		<?php }else{ ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['last_page_m1'];?>
</a>
		<?php }?>
                
		<?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
</a>
		<?php }else{ ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value['lastpage'];?>
</a>
		<?php }?>
	<?php }else{ ?>
	    <!-- End only hide early pages -->
	    <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=1&limit=<?php echo $_GET['limit'];?>
">1</a>
	    <?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=1">1</a>
	    <?php }?>
	
            <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=2&limit=<?php echo $_GET['limit'];?>
">2</a>
	    <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=2">2</a>
	    <?php }?>
	  
	    ...
	    <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int)ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? $_smarty_tpl->tpl_vars['pagination']->value['lastpage']+1 - (($_smarty_tpl->tpl_vars['pagination']->value['lastpage']-(2+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2)))) : ($_smarty_tpl->tpl_vars['pagination']->value['lastpage']-(2+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2)))-($_smarty_tpl->tpl_vars['pagination']->value['lastpage'])+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0){
for ($_smarty_tpl->tpl_vars['counter']->value = ($_smarty_tpl->tpl_vars['pagination']->value['lastpage']-(2+($_smarty_tpl->tpl_vars['pagination']->value['stages']*2))), $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++){
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration == 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration == $_smarty_tpl->tpl_vars['counter']->total;?>
		<?php if ($_smarty_tpl->tpl_vars['counter']->value==$_smarty_tpl->tpl_vars['pagination']->value['page']){?>
		    <span class='current'><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span>
	        <?php }else{ ?>
		    <?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>	
                        <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
&limit=<?php echo $_GET['limit'];?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
		    <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
		    <?php }?> 
		<?php }?>
	    <?php }} ?>
	<?php }?>
    <?php }?>
    <!--  Next -->
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['page']<($_smarty_tpl->tpl_vars['counter']->value-1)){?>
	<?php if (isset($_GET['search'])&&isset($_GET['category'])&&isset($_GET['limit'])){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?search=<?php echo $_GET['search'];?>
&category=<?php echo $_GET['category'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
&limit=<?php echo $_GET['limit'];?>
">Next</a>
	<?php }else{ ?>
	    <a href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['targetpage'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
">Next</a>
	<?php }?>
    <?php }else{ ?>
	<span class='disabled'>Next</span>
    <?php }?>
    </div>
<?php }?><?php }} ?>