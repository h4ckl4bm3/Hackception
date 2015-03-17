<?php /* Smarty version Smarty-3.1.8, created on 2015-03-02 16:48:19
         compiled from "/var/www/html/hackademic/view/_footer_frontend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173160305154f1e25625a167-31906141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cbd7a529dec0e6a8dba9355f2702a31f4c93d4a' => 
    array (
      0 => '/var/www/html/hackademic/view/_footer_frontend.tpl',
      1 => 1425295089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173160305154f1e25625a167-31906141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54f1e256278bc7_59803702',
  'variables' => 
  array (
    'is_logged_in' => 0,
    'challenge_menu' => 0,
    'class_challenges' => 0,
    'site_root_path' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f1e256278bc7_59803702')) {function content_54f1e256278bc7_59803702($_smarty_tpl) {?>            </td>
		
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
<!-- 3rd starts from here-->
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