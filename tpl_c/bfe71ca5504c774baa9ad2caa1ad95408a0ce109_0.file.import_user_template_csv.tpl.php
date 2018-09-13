<?php
/* Smarty version 3.1.30, created on 2018-09-11 13:14:52
  from "/home2/zackpete/public_html/komatsuevents/tpl/Admin/Users/import_user_template_csv.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b98061c641406_75745962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe71ca5504c774baa9ad2caa1ad95408a0ce109' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Admin/Users/import_user_template_csv.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98061c641406_75745962 (Smarty_Internal_Template $_smarty_tpl) {
?>
username,email,first name,last name,password,phone,organization,position,timezone,language,groups<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>,<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['attribute']->value->Label());
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
