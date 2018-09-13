<?php
/* Smarty version 3.1.30, created on 2018-09-13 10:30:09
  from "/home2/zackpete/public_html/komatsuevents/tpl/ResourceDisplay/resource-display-resource.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9a8281317339_54861739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356d8ade6dea4ffdfa87ac95abf57d0522cd1005' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/ResourceDisplay/resource-display-resource.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a8281317339_54861739 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="col-xs-6 resource-display-name"><?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>
</div>
<div class="col-xs-6 resource-display-date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['Today']->value,'key'=>'schedule_daily'),$_smarty_tpl);?>
</div>

<?php $_smarty_tpl->_assignInScope('AvailableNow', true);
$_smarty_tpl->_assignInScope('NextAvailable', false);
$_smarty_tpl->_assignInScope('AutoReleaseMinutes', null);
$_smarty_tpl->_assignInScope('CheckInRequired', false);
?>
<div class="col-xs-12">
    <table class="reservations">
        <thead>
        <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['Today']->value), 'period');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
?>
                <td class="reslabel" colspan="<?php echo $_smarty_tpl->tpl_vars['period']->value->Span();?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['Today']->value);?>
</td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tr>
        </thead>
        <tbody>
        <tr>
            <?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['Today']->value,$_smarty_tpl->tpl_vars['ResourceId']->value));
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('referenceNumber', '');
?>
                <?php if ($_smarty_tpl->tpl_vars['slot']->value->IsReserved()) {?>
                    <?php if ($_smarty_tpl->tpl_vars['slot']->value->CollidesWith($_smarty_tpl->tpl_vars['Today']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('AvailableNow', false);
?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('class', "reserved");
?>
                    <?php $_smarty_tpl->_assignInScope('referenceNumber', $_smarty_tpl->tpl_vars['slot']->value->Reservation()->ReferenceNumber);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['slot']->value->IsReservable()) {?>
                    <?php if ($_smarty_tpl->tpl_vars['NextAvailable']->value == false && !$_smarty_tpl->tpl_vars['slot']->value->IsPastDate($_smarty_tpl->tpl_vars['Today']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('NextAvailable', $_smarty_tpl->tpl_vars['slot']->value->BeginDate());
?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('class', "reservable");
?>
                    <?php if ($_smarty_tpl->tpl_vars['slot']->value->IsPastDate(Date::Now())) {?>
                        <?php $_smarty_tpl->_assignInScope('class', "pasttime");
?>
                    <?php }?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['slot']->value->CollidesWith($_smarty_tpl->tpl_vars['Today']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('AvailableNow', false);
?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('class', "unreservable");
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['slot']->value->HasCustomColor()) {?>
                    <?php $_smarty_tpl->_assignInScope('color', (((('style="background-color:').($_smarty_tpl->tpl_vars['slot']->value->Color())).(';color:')).($_smarty_tpl->tpl_vars['slot']->value->TextColor())).(';"'));
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['slot']->value->AutoReleaseMinutes() != 0) {?>
                    <?php $_smarty_tpl->_assignInScope('AutoReleaseMinutes', $_smarty_tpl->tpl_vars['slot']->value->AutoReleaseMinutesRemaining());
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['slot']->value->RequiresCheckin()) {?>
                    <?php $_smarty_tpl->_assignInScope('CheckInRequired', true);
?>
                <?php }?>
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['slot']->value->PeriodSpan();?>
" $color
                    class="slot <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" data-refnum="<?php echo $_smarty_tpl->tpl_vars['referenceNumber']->value;?>
"
                    data-checkin="<?php echo $_smarty_tpl->tpl_vars['CheckInRequired']->value;?>
"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value), ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tr>
        </tbody>
    </table>
</div>

<?php if ($_smarty_tpl->tpl_vars['NextAvailable']->value != false) {?>
    <div id="process-reservation">
        <form role="form" method="post" id="formReserve" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=reserve">
            <div class="col-xs-12 margin-top-25">
                <div class="clearfix"></div>
                <div id="validationErrors" class="validationSummary alert alert-danger no-show">
                    <ul>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"emailformat",'key'=>"ValidEmailRequired"),$_smarty_tpl);?>

                    </ul>
                </div>

                <div id="reserveResults" class="no-show">
                </div>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="email-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input id="emailAddress" type="email" class="form-control" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Email'),$_smarty_tpl);?>
"
                           aria-describedby="email-addon" required="required" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'EMAIL'),$_smarty_tpl);?>
>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="margin-top-25">
                <div class="col-xs-6">
                    <div class="input-group input-group-lg has-feedback">
				<span class="input-group-addon" id="starttime-addon"><span
                            class="glyphicon glyphicon-time"></span></span>
                        <select class="form-control" aria-describedby="starttime-addon"
                                id="beginPeriod" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_PERIOD'),$_smarty_tpl);?>
>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['slot']->value->IsReservable() && !$_smarty_tpl->tpl_vars['slot']->value->IsPastDate($_smarty_tpl->tpl_vars['Today']->value)) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['slot']->value->Begin();?>
"><?php echo $_smarty_tpl->tpl_vars['slot']->value->Begin()->Format($_smarty_tpl->tpl_vars['TimeFormat']->value);?>
</option>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="input-group input-group-lg">
				<span class="input-group-addon" id="endtime-addon"><span
                            class="glyphicon glyphicon-time"></span></span>
                        <select class="form-control input-lg" aria-describedby="endtime-addon"
                                id="endPeriod" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_PERIOD'),$_smarty_tpl);?>
>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['slot']->value->IsReservable() && !$_smarty_tpl->tpl_vars['slot']->value->IsPastDate($_smarty_tpl->tpl_vars['Today']->value)) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['slot']->value->End();?>
"><?php echo $_smarty_tpl->tpl_vars['slot']->value->End()->Format($_smarty_tpl->tpl_vars['TimeFormat']->value);?>
</option>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
            </div>

            <?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
                <div class="customAttributes col-xs-12">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute', false, NULL, 'attributeEach', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_attributeEach']->value['index']++;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attributeEach']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attributeEach']->value['index'] : null)%2 == 0) {?>
                            <div class="row">
                        <?php }?>
                        <div class="customAttribute col-xs-6">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value),$_smarty_tpl);?>

                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attributeEach']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attributeEach']->value['index'] : null)%2 == 1) {?>
                            </div>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)%2 == 1) {?>
                        <div class="col-xs-6">&nbsp;</div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>

            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
"/>
            <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TIMEZONE'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Timezone']->value;?>
"/>
        </form>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['AvailableNow']->value) {?>
<div class="col-xs-12">
    <div class="resource-display-available reservePrompt"
         data-next-time="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['NextAvailable']->value,'key'=>'url_full'),$_smarty_tpl);?>
">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserve'),$_smarty_tpl);?>

    </div>
</div>
<?php } else {
if ($_smarty_tpl->tpl_vars['CheckInRequired']->value) {?>
<div class="col-xs-6">
    <?php } else { ?>
    <div class="col-xs-12">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['NextAvailable']->value != false) {?>
        <div class="resource-display-unavailable reservePrompt"
             data-next-time="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['NextAvailable']->value,'key'=>'url_full'),$_smarty_tpl);?>
">
            <?php } else { ?>
            <div class="resource-display-unavailable">
                <?php }?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UnavailableNow'),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['NextAvailable']->value != false) {?> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReserveLater'),$_smarty_tpl);
}?>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['CheckInRequired']->value) {?>
            <div class="col-xs-6">
                <form role="form" method="post" id="formCheckin"
                      action="ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkin;?>
">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

                    <input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 id="referenceNumber"/>
                    <button type="submit" class="col-xs-12 resource-display-checkin"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckIn'),$_smarty_tpl);?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['AutoReleaseMinutes']->value)) {?>
                            <span> - <?php echo $_smarty_tpl->tpl_vars['AutoReleaseMinutes']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</span>
                        <?php }?>
                    </button>
                </form>
            </div>
        <?php }?>
        <?php }
}
}
