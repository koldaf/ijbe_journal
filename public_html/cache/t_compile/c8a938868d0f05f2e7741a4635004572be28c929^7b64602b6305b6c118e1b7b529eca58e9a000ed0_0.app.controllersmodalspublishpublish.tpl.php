<?php
/* Smarty version 4.3.1, created on 2025-05-13 15:54:14
  from 'app:controllersmodalspublishpublish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68235d1668bc06_17390996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b64602b6305b6c118e1b7b529eca58e9a000ed0' => 
    array (
      0 => 'app:controllersmodalspublishpublish.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68235d1668bc06_17390996 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'uniqid' ][ 0 ], array( '' )) )));?>
<div id="publish-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" class="pkpWorkflow__publishModal">
  <pkp-form v-bind="components.<?php echo (defined('FORM_PUBLISH') ? constant('FORM_PUBLISH') : null);?>
" @set="set" />
	<?php echo '<script'; ?>
 type="text/javascript">
		pkp.registry.init('publish-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'Container', <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['publishData']->value ));?>
);
	<?php echo '</script'; ?>
>
</div><?php }
}
