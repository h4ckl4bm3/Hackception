<?php /* Smarty version Smarty-3.1.8, created on 2015-03-05 18:08:47
         compiled from "/var/www/hackception/view/_footer_frontend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192497422854f5b7f1d4bce8-93743234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d6a1e1854003ca37e6bd74786d209fabc574785' => 
    array (
      0 => '/var/www/hackception/view/_footer_frontend.tpl',
      1 => 1425559124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192497422854f5b7f1d4bce8-93743234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f5b7f1e6b5b6_22203850',
  'variables' => 
  array (
    'is_logged_in' => 0,
    'challenge_menu' => 0,
    'class_challenges' => 0,
    'foo' => 0,
    'site_root_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f5b7f1e6b5b6_22203850')) {function content_54f5b7f1e6b5b6_22203850($_smarty_tpl) {?>            </td>
		
		<td id="right_bar" valign="top">
			<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
			    <?php if (count($_smarty_tpl->tpl_vars['challenge_menu']->value)>0){?>
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					<?php  $_smarty_tpl->tpl_vars['class_challenges'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class_challenges']->_loop = false;
 $_smarty_tpl->tpl_vars['class_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['challenge_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class_challenges']->key => $_smarty_tpl->tpl_vars['class_challenges']->value){
$_smarty_tpl->tpl_vars['class_challenges']->_loop = true;
 $_smarty_tpl->tpl_vars['class_name']->value = $_smarty_tpl->tpl_vars['class_challenges']->key;
?>
						<li><span class="menuTitle">WEB</span>
							<ul id="classChallenges" class="menu flt">
							<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
						           <?php if ($_smarty_tpl->tpl_vars['foo']->value['id']>0&&$_smarty_tpl->tpl_vars['foo']->value['id']<8){?>
								<li>
									<a class="width100" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/showchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['class_id'];?>
">
										<span class="padding_menu">
											<?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

										</span>
									</a>
								</li>
							    <?php }?>
							<?php } ?>
							</ul>
						</li>
					<?php } ?>
					</ul>
				</div>
			    <?php }?>
			<?php }else{ ?>
                            <?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }?>
					
                    </td>
<!-- 2nd starts from here -->
		<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
		<td id="right_bar" valign="top">
			<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
			    <?php if (count($_smarty_tpl->tpl_vars['challenge_menu']->value)>0){?>
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					<?php  $_smarty_tpl->tpl_vars['class_challenges'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class_challenges']->_loop = false;
 $_smarty_tpl->tpl_vars['class_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['challenge_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class_challenges']->key => $_smarty_tpl->tpl_vars['class_challenges']->value){
$_smarty_tpl->tpl_vars['class_challenges']->_loop = true;
 $_smarty_tpl->tpl_vars['class_name']->value = $_smarty_tpl->tpl_vars['class_challenges']->key;
?>
						<li><span class="menuTitle">CRYPTOGRAPHY</span>
							<ul id="classChallenges" class="menu flt">
							<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
							      <?php if ($_smarty_tpl->tpl_vars['foo']->value['id']>7&&$_smarty_tpl->tpl_vars['foo']->value['id']<14){?>
								<li>
									<a class="width100" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/showchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['class_id'];?>
">
										<span class="padding_menu">
											<?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

										</span>
									</a>
								</li>
								<?php }?>
							<?php } ?>
							</ul>
						</li>
					<?php } ?>
					</ul>
				</div>
			    <?php }?>
			<?php }else{ ?>
                            <?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }?>
                    </td>
		<?php }?>

<!-3rd starts here..>

<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
		<td id="right_bar" valign="top">
			<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
			    <?php if (count($_smarty_tpl->tpl_vars['challenge_menu']->value)>0){?>
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					<?php  $_smarty_tpl->tpl_vars['class_challenges'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class_challenges']->_loop = false;
 $_smarty_tpl->tpl_vars['class_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['challenge_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class_challenges']->key => $_smarty_tpl->tpl_vars['class_challenges']->value){
$_smarty_tpl->tpl_vars['class_challenges']->_loop = true;
 $_smarty_tpl->tpl_vars['class_name']->value = $_smarty_tpl->tpl_vars['class_challenges']->key;
?>
						<li><span class="menuTitle">Forensics</span>
							<ul id="classChallenges" class="menu flt">
							<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
							      <?php if ($_smarty_tpl->tpl_vars['foo']->value['id']>13&&$_smarty_tpl->tpl_vars['foo']->value['id']<20){?>
								<li>
									<a class="width100" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/showchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['class_id'];?>
">
										<span class="padding_menu">
											<?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

										</span>
									</a>
								</li>
								<?php }?>
							<?php } ?>
							</ul>
						</li>
					<?php } ?>
					</ul>
				</div>
			    <?php }?>
			<?php }else{ ?>
                            <?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }?>
                    </td>
		<?php }?>








<!-- 4rd starts from here-->
		<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
		<td id="right_bar" valign="top" >
			<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
			    <?php if (count($_smarty_tpl->tpl_vars['challenge_menu']->value)>0){?>
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					<?php  $_smarty_tpl->tpl_vars['class_challenges'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class_challenges']->_loop = false;
 $_smarty_tpl->tpl_vars['class_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['challenge_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class_challenges']->key => $_smarty_tpl->tpl_vars['class_challenges']->value){
$_smarty_tpl->tpl_vars['class_challenges']->_loop = true;
 $_smarty_tpl->tpl_vars['class_name']->value = $_smarty_tpl->tpl_vars['class_challenges']->key;
?>
						<li><span class="menuTitle">TRIVIA</span>
							<ul id="classChallenges" class="menu flt">
							<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
							      <?php if ($_smarty_tpl->tpl_vars['foo']->value['id']>19&&$_smarty_tpl->tpl_vars['foo']->value['id']<25){?>
								<li>
									<a class="width100" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/showchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['class_id'];?>
">
										<span class="padding_menu">
											<?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

										</span>
									</a>
								</li>
								<?php }?>
							<?php } ?>
							</ul>
						</li>
					<?php } ?>
					</ul>
				</div>
			    <?php }?>
			<?php }else{ ?>
                            <?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }?>
                    </td>
		<?php }?>
<!--4th starts from here-->
		<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
		<td id="right_bar" valign="top" >
			<?php if (isset($_smarty_tpl->tpl_vars['is_logged_in']->value)&&isset($_smarty_tpl->tpl_vars['challenge_menu']->value)){?>
			    <?php if (count($_smarty_tpl->tpl_vars['challenge_menu']->value)>0){?>
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					<?php  $_smarty_tpl->tpl_vars['class_challenges'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class_challenges']->_loop = false;
 $_smarty_tpl->tpl_vars['class_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['challenge_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class_challenges']->key => $_smarty_tpl->tpl_vars['class_challenges']->value){
$_smarty_tpl->tpl_vars['class_challenges']->_loop = true;
 $_smarty_tpl->tpl_vars['class_name']->value = $_smarty_tpl->tpl_vars['class_challenges']->key;
?>
						<li><span class="menuTitle">MISC.</span>
							<ul id="classChallenges" class="menu flt">
							<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class_challenges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                              <?php if ($_smarty_tpl->tpl_vars['foo']->value['id']>24&&$_smarty_tpl->tpl_vars['foo']->value['id']<40){?>

								<li>
									<a class="width100" href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
pages/showchallenges.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
&class_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['class_id'];?>
">
										<span class="padding_menu">
											<?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

										</span>
									</a>
								</li>
								<?php }?>
							<?php } ?>
							</ul>
						</li>
					<?php } ?>
					</ul>
				</div>
			    <?php }?>
			<?php }else{ ?>
                            <?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }?>
                    </td>
		<?php }?>
	
                </tr>
            </table>
        </div>
    </body>
</html>
<?php }} ?>