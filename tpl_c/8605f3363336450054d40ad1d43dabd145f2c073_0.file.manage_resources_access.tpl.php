<?php
/* Smarty version 3.1.30, created on 2018-09-11 11:22:52
  from "/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resources_access.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b97ebdc22ae79_68344035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8605f3363336450054d40ad1d43dabd145f2c073' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resources_access.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97ebdc22ae79_68344035 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="startNoticeAdd"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeAdd()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="startNoticeUpdate"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeUpdate()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeUpdate','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneUpdate'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="startNoticeDelete"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeDelete()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeDelete','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNoneDelete'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="endNotice"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxNotice()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="requiresApproval"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApprovalNone'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="autoAssign"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionNotAutoGranted'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="enableCheckin"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoCheckInRequiredNotification'),$_smarty_tpl);?>

	<?php }?>
</div>
<div class="autoRelease"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsAutoReleased()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes()),$_smarty_tpl);?>

	<?php }?>
</div>
<?php }
}
