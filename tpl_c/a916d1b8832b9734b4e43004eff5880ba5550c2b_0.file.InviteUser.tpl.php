<?php
/* Smarty version 3.1.30, created on 2018-09-11 11:53:35
  from "/home2/zackpete/public_html/komatsuevents/lang/en_us/InviteUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b97f30f85acd4_95750291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a916d1b8832b9734b4e43004eff5880ba5550c2b' => 
    array (
      0 => '/home2/zackpete/public_html/komatsuevents/lang/en_us/InviteUser.tpl',
      1 => 1535550215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97f30f85acd4_95750291 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['FullName']->value;?>
 has invited you to register for an account with <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
. Please <a href="<?php echo $_smarty_tpl->tpl_vars['RegisterUrl']->value;?>
">register your account</a>.<?php }
}
