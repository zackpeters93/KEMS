<?php
/* Smarty version 3.1.30, created on 2018-09-13 12:39:48
  from "/home2/zackpete/public_html/komatsuevents/tpl/Dashboard/upcoming_reservations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9aa0e4a45b45_45028222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c618f96e51bfb5b1fd6d80a4b2f762e5a16dcb' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Dashboard/upcoming_reservations.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Dashboard/dashboard_reservation.tpl' => 4,
  ),
),false)) {
function content_5b9aa0e4a45b45_45028222 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="dashboard upcomingReservationsDashboard" id="upcomingReservationsDashboard">
	<div class="dashboardHeader">
		<div class="pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['Total']->value;?>
</span></div>
		<div class="pull-right">
			<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
">
				<i class="glyphicon"></i>
                <span class="no-show">Expand/Collapse</span>
            </a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="dashboardContents">
		<?php $_smarty_tpl->_assignInScope('colspan', "5");
?>
		<?php if ($_smarty_tpl->tpl_vars['Total']->value > 0) {?>
			<div>
				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Today"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TodaysReservations']->value);?>
)
				</div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TodaysReservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:Dashboard/dashboard_reservation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0, true);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Tomorrow"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TomorrowsReservations']->value);?>
)
				</div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TomorrowsReservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:Dashboard/dashboard_reservation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0, true);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LaterThisWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['ThisWeeksReservations']->value);?>
)
				</div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ThisWeeksReservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:Dashboard/dashboard_reservation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0, true);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NextWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['NextWeeksReservations']->value);?>
)
				</div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NextWeeksReservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:Dashboard/dashboard_reservation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0, true);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		<?php } else { ?>
			<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoUpcomingReservations"),$_smarty_tpl);?>
</div>
		<?php }?>
	</div>

	<form id="form-checkin" method="post" action="ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkin;?>
">
		<input type="hidden" id="referenceNumber" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 />
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

	</form>
</div>
<?php }
}
