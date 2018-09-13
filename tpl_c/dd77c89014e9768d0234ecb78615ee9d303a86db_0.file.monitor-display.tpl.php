<?php
/* Smarty version 3.1.30, created on 2018-09-11 16:34:39
  from "/home2/zackpete/public_html/komatsuevents/tpl/MonitorDisplay/monitor-display.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9834efc7f590_89093255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd77c89014e9768d0234ecb78615ee9d303a86db' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/MonitorDisplay/monitor-display.tpl',
      1 => 1535638229,
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
function content_5b9834efc7f590_89093255 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('HideNavBar'=>true), 0, false);
?>


<div id="page-monitor-display">
    <?php if ($_smarty_tpl->tpl_vars['Enabled']->value) {?>
    <div id="monitor-display-configuration">
        <a href="#" data-toggle="collapse" data-target="#configuration-options"
           title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangeConfiguration'),$_smarty_tpl);?>
"><i class="fa fa-cog"></i></a>

        <div class="collapse" id="configuration-options">
            <div class="row">
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="schedules"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
</label>
                        <select class="form-control" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedules'),$_smarty_tpl);?>
" id="schedules">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'schedule');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsDefault()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="resources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</label>
                        <select class="form-control" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
" id="resources">
                            <option selected="selected" value="-1">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
 --</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="format"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Format'),$_smarty_tpl);?>
</label>
                        <select class="form-control" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Format'),$_smarty_tpl);?>
" id="format">
                            <option selected="selected" value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Grid'),$_smarty_tpl);?>
</option>
                            <option value="2"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'List'),$_smarty_tpl);?>
</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="days"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NumberOfDaysVisible'),$_smarty_tpl);?>
</label>
                        <select class="form-control" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NumberOfDaysVisible'),$_smarty_tpl);?>
" id="days">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="monitor-display-schedule">

    </div>
    <?php } else { ?>
        <div class="alert alert-danger">To enable the monitor display, set view.schedules to true in your application configuration</div>
    <?php }?>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"monitor-display.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">

    $(function () {
        var monitorDisplay = new MonitorDisplay( {
            resourcesUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=resources&sid=',
            scheduleUrl:  '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=schedule&sid=[sid]&rid=[rid]&format=[format]&d=[days]'
        });
        monitorDisplay.init();
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
