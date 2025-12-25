<?php
/* Smarty version 4.3.1, created on 2025-05-10 05:44:25
  from 'app:formhiddenInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_681ed9a978cd12_14392914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1506229aed1c1fbffe0f875462eaf53159807b5f' => 
    array (
      0 => 'app:formhiddenInput.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681ed9a978cd12_14392914 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden"
	  id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
"
	  name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));?>
"
	  class="<?php echo $_smarty_tpl->tpl_vars['FBV_class']->value;
if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_validation']->value ));
}?>"
	  value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_value']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
"
	  <?php echo $_smarty_tpl->tpl_vars['FBV_hiddenInputParams']->value;?>
 />
<?php }
}
