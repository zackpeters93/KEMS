<?php
/* Smarty version 3.1.30, created on 2018-09-11 11:21:26
  from "/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resources_groups.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b97eb86293f50_78837725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfdd60423e673d50066c4ce60f426741c4f78bf8' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resources_groups.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97eb86293f50_78837725 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (count($_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds()) == 0) {?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>

<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds(), 'resourceGroupId', false, NULL, 'eachGroup', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceGroupId']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['total'];
?>
	<span class="resourceGroupId" data-value="<?php echo $_smarty_tpl->tpl_vars['resourceGroupId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ResourceGroupList']->value[$_smarty_tpl->tpl_vars['resourceGroupId']->value]->name;?>
</span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] : null)) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
