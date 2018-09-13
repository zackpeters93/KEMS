<?php
/* Smarty version 3.1.30, created on 2018-08-30 12:54:45
  from "/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resource_groups.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b882f65b84387_64685261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217edee7a0f4580a9119b794803357c5f0b698a4' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Admin/Resources/manage_resource_groups.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Admin/Resources/manage_resource_menu.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5b882f65b84387_64685261 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>'scripts/css/jquery.contextMenu.css,scripts/css/jqtree.css'), 0, false);
?>


<div id="page-manage-resource-groups" class="admin-page">

	<?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resource_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ResourcePageTitleKey'=>'ManageResourceGroups'), 0, false);
?>


	<div id="globalError" class="alert alert-danger no-show"></div>

	<div id="manage-resource-groups-container">
		<div id="new-group">
			<form method="post" id="addGroupForm" ajaxAction="<?php echo ManageResourceGroupsActions::AddGroup;?>
">
				<div class="form-group">
                    <label for="groupName" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddNewGroup'),$_smarty_tpl);?>
</label>
                    <input type="text" name="<?php echo FormKeys::GROUP_NAME;?>
" class="form-control new-group inline" size="30"
					   id="groupName" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddNewGroup'),$_smarty_tpl);?>
"/>
				<input type="hidden" name="<?php echo FormKeys::PARENT_ID;?>
"/>
				<a href="#" class="fa fa-plus-circle icon add inline" id="btnAddGroup"><span class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
</span></a>
				</div>
			</form>
		</div>
		<div id="group-tree"></div>
		<div id="resource-list">
			<h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</h4>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
				<div class="resource-draggable" resource-name="<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetName(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
					 resource-id="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		<div class="clear">&nbsp;</div>
	</div>

	<div class="clearfix"></div>

	<div class="alert alert-warning" id="resourceGroupWarning" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
					aria-hidden="true">&times;</span></button>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroupWarning'),$_smarty_tpl);?>

	</div>

	<input type="hidden" id="activeId" value=""/>

	<div id="renameDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="renameGroupDialogLabel"
		 aria-hidden="true">
		<form id="renameForm" method="post" ajaxAction="<?php echo ManageResourceGroupsActions::RenameGroup;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="renameGroupDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="editName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</label>
							<input id="editName" type="text" class="textbox required triggerSubmit" maxlength="85"
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_NAME'),$_smarty_tpl);?>
 />
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="deleteDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteDialogLabel"
		 aria-hidden="true">
		<form id="deleteForm" method="post" ajaxAction="<?php echo ManageResourceGroupsActions::DeleteGroup;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</div>
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="addChildDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addGroupDialogLabel"
		 aria-hidden="true">
		<form id="addChildForm" method="post" ajaxAction="<?php echo ManageResourceGroupsActions::AddGroup;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addGroupDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddNewGroup'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="childName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</label>
							<input id="childName" type="text" class="form-control required new-group" maxlength="85"
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_NAME'),$_smarty_tpl);?>
 />
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array(),$_smarty_tpl);?>

						<input type="hidden" id="groupParentId" name="<?php echo FormKeys::PARENT_ID;?>
"/>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="help" class="alert alert-info" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
					aria-hidden="true">&times;</span></button>
		<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroupHelp1'),$_smarty_tpl);?>
</div>
		<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroupHelp2'),$_smarty_tpl);?>
</div>
		<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroupHelp3'),$_smarty_tpl);?>
</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/resource-groups.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.cookie.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.contextMenu.js"),$_smarty_tpl);?>


	<?php echo '<script'; ?>
 type="text/javascript">

		$(document).ready(function ()
		{
			var actions = {
				addResource: '<?php echo ManageResourceGroupsActions::AddResource;?>
',
				removeResource: '<?php echo ManageResourceGroupsActions::RemoveResource;?>
',
				moveNode: '<?php echo ManageResourceGroupsActions::MoveNode;?>
'
			};

			var groupOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions,
				renameText: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>strtr('Rename', array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
',
				addChildText: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>strtr('AddGroup', array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
',
				deleteText: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>strtr('Delete', array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
',
				exitText: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>strtr('Close', array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
'
			};

			var groupManagement = new ResourceGroupManagement(groupOptions);
			groupManagement.init(<?php echo $_smarty_tpl->tpl_vars['ResourceGroups']->value;?>
);

			$('#help-button').click(function (e)
			{
				$('#' + $(this).attr('help-ref')).dialog();
			});
		});

	<?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
