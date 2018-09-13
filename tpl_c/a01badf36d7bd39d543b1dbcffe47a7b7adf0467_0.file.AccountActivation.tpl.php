<?php
/* Smarty version 3.1.30, created on 2018-08-30 13:29:16
  from "/home2/zackpete/public_html/komatsuevents/lang/en_us/AccountActivation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b88377c329155_33371144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01badf36d7bd39d543b1dbcffe47a7b7adf0467' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/lang/en_us/AccountActivation.tpl',
      1 => 1535550215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b88377c329155_33371144 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
,<br/>
Thank you for registering with <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
. Please <a href="<?php echo $_smarty_tpl->tpl_vars['ActivationUrl']->value;?>
">activate your account</a>.
<?php }
}
