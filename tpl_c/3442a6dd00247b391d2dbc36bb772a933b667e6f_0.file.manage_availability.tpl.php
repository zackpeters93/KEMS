<?php
/* Smarty version 3.1.30, created on 2018-08-28 08:07:42
  from "/home2/zackpete/public_html/booked/tpl/Admin/Schedules/manage_availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b85491ec7bf13_99565473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3442a6dd00247b391d2dbc36bb772a933b667e6f' => 
    array (
      0 => '/home2/zackpete/public_html/booked/tpl/Admin/Schedules/manage_availability.tpl',
      1 => 1533997406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b85491ec7bf13_99565473 (Smarty_Internal_Template $_smarty_tpl) {
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
