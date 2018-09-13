<?php
/* Smarty version 3.1.30, created on 2018-08-28 08:13:25
  from "/home2/zackpete/public_html/booked/tpl/Dashboard/dashboard_reservation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b854a75564aa3_36909262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4553cbcba5dfa164ac7af6ac28fb119f9338ecb8' => 
    array (
      0 => '/home2/zackpete/public_html/booked/tpl/Dashboard/dashboard_reservation.tpl',
      1 => 1533997406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b854a75564aa3_36909262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('checkin', $_smarty_tpl->tpl_vars['reservation']->value->IsCheckinEnabled() && $_smarty_tpl->tpl_vars['reservation']->value->RequiresCheckin());
$_smarty_tpl->_assignInScope('class', '');
if ($_smarty_tpl->tpl_vars['reservation']->value->RequiresApproval) {
$_smarty_tpl->_assignInScope('class', "pending");
}?>
<div class="reservation row <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
    <div class="col-sm-3 col-xs-12"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['reservation']->value->Title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['DefaultTitle']->value : $tmp);?>
</div>
    <div class="col-sm-2 col-xs-12"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['reservation']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['reservation']->value->LastName,'ignorePrivacy'=>$_smarty_tpl->tpl_vars['reservation']->value->IsUserOwner($_smarty_tpl->tpl_vars['UserId']->value)),$_smarty_tpl);?>
 <?php if (!$_smarty_tpl->tpl_vars['reservation']->value->IsUserOwner($_smarty_tpl->tpl_vars['UserId']->value)) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"users.png",'altKey'=>'Participant'),$_smarty_tpl);
}?></div>
    <div class="col-sm-2 col-xs-6"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</div>
    <div class="col-sm-2 col-xs-6"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</div>
    <div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['checkin']->value) {?>2<?php } else { ?>3<?php }?> col-xs-12"><?php echo join($_smarty_tpl->tpl_vars['reservation']->value->ResourceNames,', ');?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['checkin']->value) {?>
        <div class="col-sm-1 col-xs-12">
            <button type="button" class="btn btn-xs col-xs-12 btn-success btnCheckin" data-referencenumber="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
                <i class="fa fa-sign-in"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckIn'),$_smarty_tpl);?>

            </button>
        </div>
    <?php }?>
    <div class="clearfix"></div>
</div>

<?php }
}
