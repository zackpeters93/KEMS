<?php
/* Smarty version 3.1.30, created on 2018-08-27 17:05:59
  from "/home2/zackpete/public_html/booked/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b8475c745ce69_58138483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4172c6f62932f34e2733bd6ad73fb47c60437f70' => 
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
function content_5b8475c745ce69_58138483 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
