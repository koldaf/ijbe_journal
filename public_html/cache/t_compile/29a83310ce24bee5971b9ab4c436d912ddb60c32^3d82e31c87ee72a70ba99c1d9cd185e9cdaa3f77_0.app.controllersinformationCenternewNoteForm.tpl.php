<?php
/* Smarty version 4.3.1, created on 2025-05-13 15:50:02
  from 'app:controllersinformationCenternewNoteForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68235c1aa4c5a5_66688518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d82e31c87ee72a70ba99c1d9cd185e9cdaa3f77' => 
    array (
      0 => 'app:controllersinformationCenternewNoteForm.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68235c1aa4c5a5_66688518 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	// Attach the Notes handler.
	$(function() {
		$('#newNoteForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				baseUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseUrl']->value ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="newNoteForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'op'=>"saveNote",'params'=>$_smarty_tpl->tpl_vars['linkParams']->value),$_smarty_tpl ) );?>
" method="post">
	<div id="newNoteContainer">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"informationCenter.addNote",'for'=>"newNote"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"informationCenter.addNote",'for'=>"newNote"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"newNote"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"informationCenter.addNote",'for'=>"newNote"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('hideCancel'=>true,'submitText'=>$_smarty_tpl->tpl_vars['submitNoteText']->value),$_smarty_tpl ) );?>

	</div>
</form>
<?php }
}
