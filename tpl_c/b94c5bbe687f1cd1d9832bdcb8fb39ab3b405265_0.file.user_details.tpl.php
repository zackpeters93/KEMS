<?php
/* Smarty version 3.1.30, created on 2018-09-11 14:20:21
  from "/home2/zackpete/public_html/komatsuevents/tpl/Ajax/user_details.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9815758d03f5_01747653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94c5bbe687f1cd1d9832bdcb8fb39ab3b405265' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Ajax/user_details.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9815758d03f5_01747653 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['CanViewUser']->value) {?>
<div id="userDetailsPopup">
	<div id="userDetailsName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['User']->value->FirstName(),'last'=>$_smarty_tpl->tpl_vars['User']->value->LastName(),'ignorePrivacy'=>true),$_smarty_tpl);?>
</div>
	<div id="userDetailsEmail"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Email'),$_smarty_tpl);?>
</span> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['User']->value->EmailAddress();?>
"><?php echo $_smarty_tpl->tpl_vars['User']->value->EmailAddress();?>
</a></div>
	<div id="userDetailsPhone"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Phone'),$_smarty_tpl);?>
</span> <a href="tel:<?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Phone);?>
"><?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Phone);?>
</a></div>
	<div id="userDetailsOrganization"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Organization'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Organization);?>
</div>
	<div id="userDetailsPosition"><span class="label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Position'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttribute(UserAttribute::Position);?>
</div>
	<div id="userDetailsAttributes">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
		<div class="customAttribute"><span class="label"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</span> <?php echo $_smarty_tpl->tpl_vars['User']->value->GetAttributeValue($_smarty_tpl->tpl_vars['attribute']->value->Id());?>
</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</div>
<?php }
}
}
