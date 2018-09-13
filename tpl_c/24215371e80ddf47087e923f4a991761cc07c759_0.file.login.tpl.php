<?php
/* Smarty version 3.1.30, created on 2018-09-13 12:39:43
  from "/home2/zackpete/public_html/komatsuevents/tpl/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9aa0df0ebac7_42156845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24215371e80ddf47087e923f4a991761cc07c759' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/login.tpl',
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
function content_5b9aa0df0ebac7_42156845 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-login">
	<?php if ($_smarty_tpl->tpl_vars['ShowLoginError']->value) {?>
		<div id="loginError" class="alert alert-danger">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LoginError'),$_smarty_tpl);?>

		</div>
	<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['EnableCaptcha']->value) {?>
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'ValidationGroup'))) {
throw new SmartyException('block tag \'validation_group\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('validation_group', array('class'=>"alert alert-danger"));
$_block_repeat1=true;
echo $_block_plugin1->ValidationGroup(array('class'=>"alert alert-danger"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"captcha",'key'=>"CaptchaMustMatch"),$_smarty_tpl);?>

        <?php $_block_repeat1=false;
echo $_block_plugin1->ValidationGroup(array('class'=>"alert alert-danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php }?>

    <?php if (count($_smarty_tpl->tpl_vars['Announcements']->value) > 0) {?>
        <div id="announcements" class="col-sm-8 col-sm-offset-2 col-xs-12">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Announcements']->value, 'each');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['each']->value) {
?>
            <div class="announcement"><?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['url2link'][0][0]->CreateUrl(html_entity_decode($_smarty_tpl->tpl_vars['each']->value->Text())));?>
</div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    <?php }?>

	<div class="col-md-offset-3 col-md-6 col-xs-12 ">
		<form role="form" name="login" id="login" class="form-horizontal" method="post"
			  action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
			<div id="login-box" class="col-xs-12 default-box">
				<div class="col-xs-12 login-icon">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>((string)$_smarty_tpl->tpl_vars['LogoUrl']->value)."?2.6",'alt'=>((string)$_smarty_tpl->tpl_vars['Title']->value)),$_smarty_tpl);?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['ShowUsernamePrompt']->value) {?>
					<div class="col-xs-12">
						<div class="input-group margin-bottom-25">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" required="" class="form-control"
								   id="email" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'EMAIL'),$_smarty_tpl);?>

								   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsernameOrEmail'),$_smarty_tpl);?>
"/>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['ShowPasswordPrompt']->value) {?>
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
				<?php }?>

                <?php if ($_smarty_tpl->tpl_vars['EnableCaptcha']->value) {?>
                    <div class="col-xs-12">
                        <div class="margin-bottom-25">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"CaptchaControl"),$_smarty_tpl);?>

                        </div>
                    </div>
                <?php } else { ?>
                    <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CAPTCHA'),$_smarty_tpl);?>
 value=""/>
                <?php }?>

				<?php if ($_smarty_tpl->tpl_vars['ShowUsernamePrompt']->value && $_smarty_tpl->tpl_vars['ShowPasswordPrompt']->value) {?>
				<div class="col-xs-12">
					<button type="submit" class="btn btn-large btn-primary  btn-block" name="<?php echo Actions::LOGIN;?>
"
							value="submit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LogIn'),$_smarty_tpl);?>
</button>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESUME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ResumeUrl']->value;?>
"/>
				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['ShowUsernamePrompt']->value && $_smarty_tpl->tpl_vars['ShowPasswordPrompt']->value) {?>
				<div class="col-xs-12 <?php if ($_smarty_tpl->tpl_vars['ShowRegisterLink']->value) {?>col-sm-6<?php }?>">
					<div class="checkbox">
						<input id="rememberMe" type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PERSIST_LOGIN'),$_smarty_tpl);?>
>
						<label for="rememberMe"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RememberMe'),$_smarty_tpl);?>
</label>
					</div>
				</div>
				<?php }?>

                <?php if ($_smarty_tpl->tpl_vars['ShowRegisterLink']->value) {?>
                    <div class="col-xs-12 col-sm-6 register">
                    <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FirstTimeUser?"),$_smarty_tpl);?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['RegisterUrl']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['RegisterUrlNew']->value;?>

                       title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Register'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Register'),$_smarty_tpl);?>
</a>
                    </span>
                    </div>
                <?php }?>

				<div class="clearfix"></div>

				<?php if ($_smarty_tpl->tpl_vars['AllowGoogleLogin']->value && $_smarty_tpl->tpl_vars['AllowFacebookLogin']->value) {?>
					<?php $_smarty_tpl->_assignInScope('socialClass', "col-sm-12 col-md-6");
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('socialClass', "col-sm-12");
?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['AllowGoogleLogin']->value) {?>
					<div class="<?php echo $_smarty_tpl->tpl_vars['socialClass']->value;?>
 social-login" id="socialLoginGoogle">
						<a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email%20profile&state=<?php echo $_smarty_tpl->tpl_vars['GoogleState']->value;?>
&redirect_uri=https://www.social.twinkletoessoftware.com/googleresume.php&response_type=code&client_id=531675809673-3sfvrchh6svd9bfl7m55dao8n4s6cqpc.apps.googleusercontent.com">
							<img src="img/external/btn_google_signin_dark_normal_web.png" alt="Sign in with Google"/>
						</a>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['AllowFacebookLogin']->value) {?>
					<div class="<?php echo $_smarty_tpl->tpl_vars['socialClass']->value;?>
 social-login" id="socialLoginFacebook">
						<a href="https://www.social.twinkletoessoftware.com/fblogin.php?protocol=<?php echo $_smarty_tpl->tpl_vars['Protocol']->value;?>
&resume=<?php echo $_smarty_tpl->tpl_vars['ScriptUrlNoProtocol']->value;?>
/external-auth.php%3Ftype%3Dfb%26redirect%3D<?php echo $_smarty_tpl->tpl_vars['ResumeUrl']->value;?>
">
							<img style="max-height:42px" src="img/external/btn_facebook_login.png" alt="Sign in with Facebook"/>
						</a>
					</div>
				<?php }?>
			</div>
			<div id="login-footer" class="col-xs-12">
				<?php if ($_smarty_tpl->tpl_vars['ShowForgotPasswordPrompt']->value) {?>
					<div id="forgot-password" class="col-xs-12 col-sm-6">
						<a href="<?php echo $_smarty_tpl->tpl_vars['ForgotPasswordUrl']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['ForgotPasswordUrlNew']->value;?>
 class="btn btn-link pull-left-sm"><span><i
										class="glyphicon glyphicon-question-sign"></i></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ForgotMyPassword'),$_smarty_tpl);?>
</a>
					</div>
				<?php }?>
				<div id="change-language" class="col-xs-12 col-sm-6">
					<button type="button" class="btn btn-link pull-right-sm" data-toggle="collapse"
							data-target="#change-language-options"><span><i class="glyphicon glyphicon-globe"></i></span>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangeLanguage'),$_smarty_tpl);?>

					</button>
					<div id="change-language-options" class="collapse">
						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LANGUAGE'),$_smarty_tpl);?>
 class="form-control input-sm" id="languageDropDown">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Languages']->value,'key'=>'GetLanguageCode','label'=>'GetDisplayName','selected'=>$_smarty_tpl->tpl_vars['SelectedLanguage']->value),$_smarty_tpl);?>

						</select>
					</div>
				</div>
			</div>


		</form>
	</div>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'EMAIL'),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript">
	var url = 'index.php?<?php echo QueryStringKeys::LANGUAGE;?>
=';
	$(document).ready(function () {
		$('#languageDropDown').change(function () {
			window.location.href = url + $(this).val();
		});

		var langCode = readCookie('<?php echo CookieKeys::LANGUAGE;?>
');

		if (!langCode)
		{
		}
	});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
