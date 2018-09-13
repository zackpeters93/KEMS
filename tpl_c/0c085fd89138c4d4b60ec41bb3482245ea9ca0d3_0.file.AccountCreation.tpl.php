<?php
/* Smarty version 3.1.30, created on 2018-08-30 13:29:16
  from "/home2/zackpete/public_html/komatsuevents/lang/en_us/AccountCreation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b88377c0b3043_32122233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c085fd89138c4d4b60ec41bb3482245ea9ca0d3' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/lang/en_us/AccountCreation.tpl',
      1 => 1535550215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b88377c0b3043_32122233 (Smarty_Internal_Template $_smarty_tpl) {
?>

<p><?php echo $_smarty_tpl->tpl_vars['To']->value;?>
,</p>

<p>A new user has registered with the following information:<br/>
Email: <?php echo $_smarty_tpl->tpl_vars['EmailAddress']->value;?>
<br/>
Name: <?php echo $_smarty_tpl->tpl_vars['FullName']->value;?>
<br/>
Phone: <?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
<br/>
Organization: <?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
<br/>
Position: <?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
</p>
<?php if (!empty($_smarty_tpl->tpl_vars['CreatedBy']->value)) {?>
	Created by: <?php echo $_smarty_tpl->tpl_vars['CreatedBy']->value;?>

<?php }
}
}
