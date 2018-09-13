<?php
/* Smarty version 3.1.30, created on 2018-09-12 15:09:15
  from "/home2/zackpete/public_html/komatsuevents/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b99726b71f6e6_49951363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed23f33fa3d070e3108cbf481b6002569f2a6d2' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/json_data.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b99726b71f6e6_49951363 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
