<?php
/* Smarty version 3.1.30, created on 2018-09-11 10:18:05
  from "/home2/zackpete/public_html/komatsuevents/tpl/Admin/Schedules/manage_availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b97dcadba4db3_80878958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed458bf23f5b29c3a5b3bc8f2f1a29ef0c72c396' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Admin/Schedules/manage_availability.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97dcadba4db3_80878958 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="availableDates"
     data-has-availability="<?php echo intval($_smarty_tpl->tpl_vars['schedule']->value->HasAvailability());?>
"
     data-start-date="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityBegin(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'general_date'),$_smarty_tpl);?>
"
     data-end-date="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityEnd(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'general_date'),$_smarty_tpl);?>
">
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>

<span class="propertyValue">
<?php if ($_smarty_tpl->tpl_vars['schedule']->value->HasAvailability()) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityBegin(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'schedule_daily'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityEnd(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'schedule_daily'),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableAllYear'),$_smarty_tpl);?>

<?php }?>
</span><?php }
}
