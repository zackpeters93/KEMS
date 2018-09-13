<?php
/* Smarty version 3.1.30, created on 2018-08-30 12:54:45
  from "/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resource_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b882f65cc21e5_63581117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439dcc0e7c7bd5af66718cc57eb8135475390494' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resource_menu.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b882f65cc21e5_63581117 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
	<div class="dropdown admin-header-more pull-right">
		<button class="btn btn-default" type="button" id="moreResourceActions" data-toggle="dropdown">
            <span class="no-show">More</span>
			<span class="glyphicon glyphicon-option-vertical"></span>
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu" aria-labelledby="moreResourceActions">

			<li role="presentation"><a role="menuitem"
									   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceGroups"),$_smarty_tpl);?>
</a>
			</li>
			<li role="presentation"><a role="menuitem"
									   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_types.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceTypes"),$_smarty_tpl);?>
</a>
			</li>
			<li role="presentation"><a role="menuitem"
									   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_status.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceStatus"),$_smarty_tpl);?>
</a>
			</li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a role="menuitem"
									   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a>
			</li>
		</ul>
	</div>

	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['ResourcePageTitleKey']->value),$_smarty_tpl);?>
</h1>
</div><?php }
}
