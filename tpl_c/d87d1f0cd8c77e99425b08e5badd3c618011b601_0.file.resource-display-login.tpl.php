<?php
/* Smarty version 3.1.30, created on 2018-09-13 10:29:23
  from "/home2/zackpete/public_html/komatsuevents/tpl/ResourceDisplay/resource-display-login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9a825376f059_27209098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd87d1f0cd8c77e99425b08e5badd3c618011b601' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/ResourceDisplay/resource-display-login.tpl',
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
function content_5b9a825376f059_27209098 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('HideNavBar'=>true), 0, false);
?>


<div id="page-resource-display-shell">

	<div class="col-md-offset-3 col-md-6 col-xs-12">

		<div id="login-box" class="col-xs-12 default-box straight-top">
			<form role="form" name="loginForm" id="loginForm" class="form-horizontal" method="post"
				  action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=login">

				<div id="loginError" class="alert alert-danger col-xs-12 no-show">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LoginError'),$_smarty_tpl);?>

				</div>

				<div class="col-xs-12">
					<div class="input-group margin-bottom-25">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" required="" class="form-control"
							   id="email" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'EMAIL'),$_smarty_tpl);?>

							   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsernameOrEmail'),$_smarty_tpl);?>
"/>
					</div>
				</div>

				<div class="col-xs-12">
					<div class="input-group margin-bottom-25">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-lock"></i>
						</span>
						<input type="password" required="" id="password" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PASSWORD'),$_smarty_tpl);?>

							   class="form-control"
							   value="" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Password'),$_smarty_tpl);?>
"/>
					</div>
				</div>

				<div class="col-xs-12">
					<button type="submit" class="btn btn-large btn-primary btn-block" name="<?php echo Actions::LOGIN;?>
"
							value="submit" id="loginButton"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LogIn'),$_smarty_tpl);?>
</button>
				</div>

			</form>
		</div>

		<div id="resource-list-box" class="col-xs-12 default-box straight-top no-show">
			<form role="form" id="activateResourceDisplayForm" method="post"
							  action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=activate">
				<h2><label for="resourceList"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceDisplayPrompt'),$_smarty_tpl);?>
</label></h2>
				<select id="resourceList" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 class="form-control">
					<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
 --</option>
				</select>
			</form>
		</div>
	</div>
</div>

<div id="wait-box" class="wait-box">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>"waitIndicator"),$_smarty_tpl);?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourceDisplay.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function () {
		var resourceDisplay = new ResourceDisplay();
		resourceDisplay.init();
	});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
