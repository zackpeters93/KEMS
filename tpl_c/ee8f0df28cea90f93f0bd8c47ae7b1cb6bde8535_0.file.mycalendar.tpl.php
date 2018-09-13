<?php
/* Smarty version 3.1.30, created on 2018-09-11 16:34:03
  from "/home2/zackpete/public_html/komatsuevents/tpl/Calendar/mycalendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9834cbaeae52_27473809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8f0df28cea90f93f0bd8c47ae7b1cb6bde8535' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Calendar/mycalendar.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5b9834cbaeae52_27473809 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php ob_start();
echo Pages::MY_CALENDAR;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
$_smarty_tpl->_assignInScope('pageIdSuffix', "my-calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "mycalendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
