<?php
/* Smarty version 4.3.1, created on 2025-06-02 16:40:13
  from 'app:controllerspagetasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_683dc5dd539528_68135911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1cb192ef33fc9e3d92436bc42c54efdb4c274b' => 
    array (
      0 => 'app:controllerspagetasks.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683dc5dd539528_68135911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'notificationsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'component'=>"grid.notifications.TaskNotificationsGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"notificationsGrid",'url'=>$_smarty_tpl->tpl_vars['notificationsGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
