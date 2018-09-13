<?php
/* Smarty version 3.1.30, created on 2018-09-04 10:43:17
  from "/home2/zackpete/public_html/komatsuevents/tpl/Controls/Attributes/Checkbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b8ea815e358e7_01256476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6258d49237551155cc5ec7689747263f0d3b3775' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/tpl/Controls/Attributes/Checkbox.tpl',
      1 => 1535550214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8ea815e358e7_01256476 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="form-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
        <label class="customAttribute readonly" for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</label>
        <span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value() == "1") {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'True'),$_smarty_tpl);
} else {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'False'),$_smarty_tpl);
}?></span>
    <?php } elseif ($_smarty_tpl->tpl_vars['searchmode']->value) {?>
        <label class="customAttribute search" for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</label>
        <select id="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" class="customAttribute form-control <?php echo $_smarty_tpl->tpl_vars['inputClass']->value;?>
">
            <option value="">--</option>
            <option value="0" <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value() == "0") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>
</option>
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value() == "1") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>
</option>
        </select>
    <?php } else { ?>
        <div class="checkbox">
            <input type="checkbox" value="1" id="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"
                   <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value() == "1") {?>checked="checked"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['inputClass']->value;?>
"/>
            <label class="customAttribute standard" for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>

                <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required() && !$_smarty_tpl->tpl_vars['searchmode']->value) {?>
                    <i class="glyphicon glyphicon-asterisk"></i>
                <?php }?>
            </label>
        </div>
    <?php }?>
</div>
<?php }
}
