<?php
/* Smarty version 3.1.30, created on 2018-08-27 16:21:21
  from "/home2/zackpete/public_html/booked/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b846b51338023_21273041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeab03d69feae2ba421268a2ba6785457e221682' => 
    array (
      0 => '/home2/zackpete/public_html/booked/tpl/json_data.tpl',
      1 => 1533997406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b846b51338023_21273041 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
