<?php
/* Smarty version 4.3.1, created on 2025-05-13 15:50:02
  from 'app:controllersinformationCenternotesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68235c1a9fab92_22115399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15602d93ceb54b0997863f52ad54c7c2b01c499c' => 
    array (
      0 => 'app:controllersinformationCenternotesList.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/informationCenter/note.tpl' => 1,
  ),
),false)) {
function content_68235c1a9fab92_22115399 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['notesListId']->value;?>
" class="pkp_notes_list">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'note');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('noteId', $_smarty_tpl->tpl_vars['note']->value->getId());?>
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/informationCenter/note.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php if ($_smarty_tpl->tpl_vars['notes']->value->isEmpty()) {?>
		<p class="no_notes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"informationCenter.noNotes"),$_smarty_tpl ) );?>
</p>
	<?php }?>
</div>
<?php }
}
