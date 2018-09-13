<?php
/* Smarty version 3.1.30, created on 2018-08-30 13:29:16
  from "/home2/zackpete/public_html/komatsuevents/tpl/Activation/activation-sent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b88377cda0e01_79818657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f1db3e1ae29ad758e6c31a06aab93d21410329' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Activation/activation-sent.tpl',
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
function content_5b88377cda0e01_79818657 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>'scripts/css/colorbox.css'), 0, false);
?>

<div id='activation-body'>
	<h2 align="center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ActivationEmailSent'),$_smarty_tpl);?>
</h2>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
