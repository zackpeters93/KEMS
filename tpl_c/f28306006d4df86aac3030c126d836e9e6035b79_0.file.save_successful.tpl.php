<?php
/* Smarty version 3.1.30, created on 2018-09-13 09:51:54
  from "/home2/zackpete/public_html/komatsuevents/tpl/Ajax/reservation/save_successful.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9a798a21a9f4_45099872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28306006d4df86aac3030c126d836e9e6035b79' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Ajax/reservation/save_successful.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a798a21a9f4_45099872 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['divId']->value)===null||$tmp==='' ? 'reservation-created' : $tmp);?>
" class="reservationResponseMessage">
	<div id="reservation-response-image">
	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<span class="fa fa-flag fa-5x warning"></span>
	<?php } else { ?>
		<span class="fa fa-check fa-5x success"></span>
	<?php }?>
	</div>

	<div id="created-message" class="reservation-message"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>(($tmp = @$_smarty_tpl->tpl_vars['messageKey']->value)===null||$tmp==='' ? "ReservationCreated" : $tmp)),$_smarty_tpl);?>
</div>
	<div id="reference-number"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourReferenceNumber','args'=>$_smarty_tpl->tpl_vars['ReferenceNumber']->value),$_smarty_tpl);?>
</div>

	<div class="dates" style="max-height: 15em;display: block;overflow-y: auto;margin: 0.5em 0;">
		<span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Dates'),$_smarty_tpl);?>
:</span>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Instances']->value, 'instance', false, NULL, 'date_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['instance']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_date_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_date_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_date_list']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_date_list']->value['total'];
?>
			<span class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['instance']->value->StartDate(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_date_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_date_list']->value['last'] : null)) {?>, <?php }?></span>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>

	<div class="resources">
		<span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
:</span>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource', false, NULL, 'resource_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_resource_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_resource_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_resource_list']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_resource_list']->value['total'];
?>
			<span class="resource"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_resource_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_resource_list']->value['last'] : null)) {?>, <?php }?></span>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<div id="approval-message"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRequiresApproval'),$_smarty_tpl);?>
</div>
	<?php }?>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="btn btn-success" />
</div><?php }
}
