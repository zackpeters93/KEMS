<?php
/* Smarty version 3.1.30, created on 2018-09-12 08:38:21
  from "/home2/zackpete/public_html/komatsuevents/tpl/Ajax/reservation/delete_successful.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9916cd1d3f75_78103359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127790238c6fa2f039cb0b1ce3a21358cf81db31' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Ajax/reservation/delete_successful.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9916cd1d3f75_78103359 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
	<div id="reservation-response-image">
		<span class="fa fa-check fa-5x success"></span>
	</div>

	<div id="deleted-message" class="reservation-message"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRemoved'),$_smarty_tpl);?>
</div>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="btn btn-success" />
</div><?php }
}
