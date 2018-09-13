<?php
/* Smarty version 3.1.30, created on 2018-09-12 08:38:21
  from "/home2/zackpete/public_html/komatsuevents/lang/en_us/ReservationDeleted.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9916cd0229b7_80901247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4988efc2aba35a59ae9f1ce9ff1f6f0647658f0' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/lang/en_us/ReservationDeleted.tpl',
      1 => 1535550215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9916cd0229b7_80901247 (Smarty_Internal_Template $_smarty_tpl) {
?>

Reservation Details:
<br/>
<br/>

User: <?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
<br/>
Starting: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
Ending: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
<?php if (count($_smarty_tpl->tpl_vars['ResourceNames']->value) > 1) {?>
    Resources:
    <br/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceNames']->value, 'resourceName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceName']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>

        <br/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
    Resource: <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>

    <br/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ResourceImage']->value) {?>
    <div class="resource-image"><img src="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ResourceImage']->value;?>
"/></div>
<?php }?>

Title: <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<br/>
Description: <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>
<br/>
Delete Reason: <?php echo nl2br($_smarty_tpl->tpl_vars['DeleteReason']->value);?>
<br/>

<?php if (count($_smarty_tpl->tpl_vars['RepeatRanges']->value) > 0) {?>
    <br/>
    The following dates have been removed:
    <br/>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatRanges']->value, 'date', false, NULL, 'dates', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value->GetBegin()),$_smarty_tpl);?>

    <?php if (!$_smarty_tpl->tpl_vars['date']->value->IsSameDate()) {?> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value->GetEnd()),$_smarty_tpl);
}?>
    <br/>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php if (count($_smarty_tpl->tpl_vars['Accessories']->value) > 0) {?>
    <br/>
    Accessories:
    <br/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Accessories']->value, 'accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
?>
        (<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
) <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>

        <br/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<br/>
<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Log in to <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
</a>
<?php }
}
