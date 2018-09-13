<?php
/* Smarty version 3.1.30, created on 2018-09-11 21:58:41
  from "/home2/zackpete/public_html/komatsuevents/tpl/MonitorDisplay/monitor-display-schedule.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9880e1dbe558_52182875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc85de34b22dbad44e058613bc7bf5d4556ba43f' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/MonitorDisplay/monitor-display-schedule.tpl',
      1 => 1535638228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Schedule/schedule-reservations-grid.tpl' => 1,
  ),
),false)) {
function content_5b9880e1dbe558_52182875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displayGeneralReserved' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayGeneralReserved_4001050865b9880e1cdbd63_19737032',
  ),
  'displayMyReserved' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayMyReserved_4001050865b9880e1cdbd63_19737032',
  ),
  'displayAdminReserved' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayAdminReserved_4001050865b9880e1cdbd63_19737032',
  ),
  'displayMyParticipating' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayMyParticipating_4001050865b9880e1cdbd63_19737032',
  ),
  'displayReserved' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayReserved_4001050865b9880e1cdbd63_19737032',
  ),
  'displayPastTime' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayPastTime_4001050865b9880e1cdbd63_19737032',
  ),
  'displayReservable' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayReservable_4001050865b9880e1cdbd63_19737032',
  ),
  'displayRestricted' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayRestricted_4001050865b9880e1cdbd63_19737032',
  ),
  'displayUnreservable' => 
  array (
    'compiled_filepath' => '/home2/zackpete/public_html/komatsuevents/tpl_c/cc85de34b22dbad44e058613bc7bf5d4556ba43f_0.file.monitor-display-schedule.tpl.php',
    'uid' => 'cc85de34b22dbad44e058613bc7bf5d4556ba43f',
    'call_name' => 'smarty_template_function_displayUnreservable_4001050865b9880e1cdbd63_19737032',
  ),
));
?>


















<h1 id="scheduleName" class="center"></h1>

<?php if ($_smarty_tpl->tpl_vars['Format']->value == 1) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:Schedule/schedule-reservations-grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('TodaysDate', Date::Now());
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
?>
        <div class="monitor-display-date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value),$_smarty_tpl);?>
</div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource', false, NULL, 'resource_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important;background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
 !important;"<?php }?>
            <div class="monitor-display-resource-name"><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</div>
            <?php $_smarty_tpl->_assignInScope('slots', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['resource']->value->Id));
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['slot']->value->IsReserved()) {?>
                <div class="reserved" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['slot']->value->BeginDate(),'key'=>'period_time'),$_smarty_tpl);?>
 -
                    <?php $_smarty_tpl->_assignInScope('slotformat', 'period_time');
?>
                    <?php if (!$_smarty_tpl->tpl_vars['slot']->value->BeginDate()->DateEquals($_smarty_tpl->tpl_vars['slot']->value->EndDate())) {?>
                        <?php $_smarty_tpl->_assignInScope('slotformat', 'short_reservation_date');
?>
                    <?php }?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['slot']->value->EndDate(),'key'=>$_smarty_tpl->tpl_vars['slotformat']->value),$_smarty_tpl);?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapequotes'][0][0]->EscapeQuotes($_smarty_tpl->tpl_vars['slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value));?>

                </div>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
/* smarty_template_function_displayGeneralReserved_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayGeneralReserved_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayGeneralReserved_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php if ($_smarty_tpl->tpl_vars['Slot']->value->IsPending()) {?>
        <?php $_smarty_tpl->_assignInScope('class', 'pending');
?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Slot']->value->HasCustomColor()) {?>
        <?php $_smarty_tpl->_assignInScope('color', (((('style="background-color:').($_smarty_tpl->tpl_vars['Slot']->value->Color())).(' !important;color:')).($_smarty_tpl->tpl_vars['Slot']->value->TextColor())).(' !important;"'));
?>
    <?php }?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" class="reserved <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['OwnershipClass']->value;?>
 clickres slot"
        resid="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
" <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['Draggable']->value) {?>draggable="true"<?php }?> data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"
        id="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
|<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Date()->Format('Ymd');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapequotes'][0][0]->EscapeQuotes($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value));?>
</td>
<?php
}}
/*/ smarty_template_function_displayGeneralReserved_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayMyReserved_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayMyReserved_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayMyReserved_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'mine','Draggable'=>true,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayMyReserved_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayAdminReserved_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayAdminReserved_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayAdminReserved_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'admin','Draggable'=>true,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayAdminReserved_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayMyParticipating_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayMyParticipating_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayMyParticipating_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'participating','ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayMyParticipating_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayReserved_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayReserved_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayReserved_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayGeneralReserved', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'','Draggable'=>((string)$_smarty_tpl->tpl_vars['CanViewAdmin']->value),'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displayReserved_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayPastTime_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayPastTime_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayPastTime_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
"
        class="pasttime slot" draggable="<?php echo $_smarty_tpl->tpl_vars['CanViewAdmin']->value;?>
" resid="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
"
        data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapequotes'][0][0]->EscapeQuotes($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value));?>
</td>
<?php
}}
/*/ smarty_template_function_displayPastTime_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayReservable_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayReservable_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayReservable_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
" class="reservable clickres slot"
        data-href="<?php echo $_smarty_tpl->tpl_vars['Href']->value;?>
"
        data-start="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('Y-m-d H:i:s'));?>
"
        data-end="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Format('Y-m-d H:i:s'));?>
"
        data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayReservable_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayRestricted_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayRestricted_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayRestricted_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" class="restricted slot">&nbsp;</td>
<?php
}}
/*/ smarty_template_function_displayRestricted_4001050865b9880e1cdbd63_19737032 */
/* smarty_template_function_displayUnreservable_4001050865b9880e1cdbd63_19737032 */
if (!function_exists('smarty_template_function_displayUnreservable_4001050865b9880e1cdbd63_19737032')) {
function smarty_template_function_displayUnreservable_4001050865b9880e1cdbd63_19737032($_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
"
        class="unreservable slot"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value), ENT_QUOTES, 'UTF-8', true);?>
</td>
<?php
}}
/*/ smarty_template_function_displayUnreservable_4001050865b9880e1cdbd63_19737032 */
}
