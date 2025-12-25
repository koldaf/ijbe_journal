<?php
/* Smarty version 4.3.1, created on 2025-05-12 18:30:23
  from 'app:controllerswizardfileUploadformfileSubmissionComplete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6822302fce8356_49259524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3676b7991ccae709a3e0b2511331cd90732ccf1' => 
    array (
      0 => 'app:controllerswizardfileUploadformfileSubmissionComplete.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6822302fce8356_49259524 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="finishSubmissionForm" class="pkp_helpers_text_center">
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.fileAdded"),$_smarty_tpl ) );?>
</h2>
	<?php if ($_smarty_tpl->tpl_vars['fileStage']->value != \PKP\submissionFile\SubmissionFile::SUBMISSION_FILE_PROOF) {?>
		<button class="pkp_button" type="button" name="newFile" id="newFile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'submission.submit.newFile'),$_smarty_tpl ) );?>
</button>
	<?php }?>
	<br>
	<br>
</div>
<?php }
}
