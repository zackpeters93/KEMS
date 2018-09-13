<?php
/* Smarty version 3.1.30, created on 2018-09-13 09:51:54
  from "/home2/zackpete/public_html/komatsuevents/tpl/Ajax/reservation/update_successful.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9a798a1f3d94_02842973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcb2876843f4955917c5c7b52a8fd266986c950a' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Ajax/reservation/update_successful.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Ajax/reservation/save_successful.tpl' => 1,
  ),
),false)) {
function content_5b9a798a1f3d94_02842973 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:Ajax/reservation/save_successful.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('divId'=>"reservation-updated",'messageKey'=>"ReservationUpdated"), 0, false);
}
}
