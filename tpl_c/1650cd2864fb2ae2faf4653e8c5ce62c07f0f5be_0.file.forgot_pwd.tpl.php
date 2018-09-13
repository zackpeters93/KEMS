<?php
/* Smarty version 3.1.30, created on 2018-09-11 07:54:44
  from "/home2/zackpete/public_html/komatsuevents/tpl/forgot_pwd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b97bb14d3e932_88031761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1650cd2864fb2ae2faf4653e8c5ce62c07f0f5be' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/forgot_pwd.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5b97bb14d3e932_88031761 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['Enabled']->value) {?>

	<?php if ($_smarty_tpl->tpl_vars['ShowResetEmailSent']->value) {?>
		<div class="alert alert-success">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ForgotPasswordEmailSent'),$_smarty_tpl);?>
<br/>
			<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::LOGIN;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LogIn"),$_smarty_tpl);?>
</a>
		</div>
	<?php }?>

<div id="forgotbox">
	<form class="forgot" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
		<div class="forgot_pwdHeader">
			<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ForgotPassword'),$_smarty_tpl);?>
</h1>
		</div>
		<div>
			<p class="forgot"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouWillBeEmailedANewPassword'),$_smarty_tpl);?>
</p>
			<p>
				<label class="forgot"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EmailAddress'),$_smarty_tpl);?>
<br />
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"EMAIL",'class'=>"input",'size'=>"20",'tabindex'=>"10"),$_smarty_tpl);?>
</label>
			</p>
			<p class="resetpassword">
				<button type="submit" class="btn btn-default" name="<?php echo Actions::RESET;?>
" value="<?php echo Actions::RESET;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangePassword'),$_smarty_tpl);?>
</button>
			</p>
		</div>
	</form>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'EMAIL'),$_smarty_tpl);?>

<?php } else { ?>
<div class="error">Disabled</div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
