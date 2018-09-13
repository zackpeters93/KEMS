<?php
/* Smarty version 3.1.30, created on 2018-09-13 10:30:06
  from "/home2/zackpete/public_html/komatsuevents/tpl/ResourceDisplay/resource-display-shell.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9a827e494b17_15832194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35ca27506089d8fec7bca5e6b5f18ab29826930f' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/ResourceDisplay/resource-display-shell.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5b9a827e494b17_15832194 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('HideNavBar'=>true), 0, false);
?>


<div id="page-resource-display-resource">
<div id="placeholder"></div>
</div>

<div id="wait-box" class="wait-box">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>"waitIndicator"),$_smarty_tpl);?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourceDisplay.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function () {
		var resourceDisplay = new ResourceDisplay();
		resourceDisplay.initDisplay(
                {
                    url: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=resource&rid=<?php echo $_smarty_tpl->tpl_vars['PublicResourceId']->value;?>
&dr=display'
                }
        );
	});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
