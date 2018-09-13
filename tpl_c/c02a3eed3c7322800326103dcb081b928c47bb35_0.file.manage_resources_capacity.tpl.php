<?php
/* Smarty version 3.1.30, created on 2018-09-11 11:21:26
  from "/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resources_capacity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b97eb86061345_50721678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c02a3eed3c7322800326103dcb081b928c47bb35' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resources_capacity.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97eb86061345_50721678 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="maxParticipants"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

	<?php }?>
</div><?php }
}
