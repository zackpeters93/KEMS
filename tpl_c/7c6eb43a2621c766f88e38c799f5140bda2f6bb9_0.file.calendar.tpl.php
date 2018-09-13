<?php
/* Smarty version 3.1.30, created on 2018-08-27 16:32:44
  from "/home2/zackpete/public_html/booked/tpl/Calendar/calendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b846dfc315c29_36884126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c6eb43a2621c766f88e38c799f5140bda2f6bb9' => 
    array (
      0 => '/home2/zackpete/public_html/booked/tpl/Calendar/calendar.tpl',
      1 => 1533997406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5b846dfc315c29_36884126 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['pageUrl']->value == null) {
ob_start();
echo Pages::CALENDAR;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
}
$_smarty_tpl->_assignInScope('pageIdSuffix', "calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "calendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
