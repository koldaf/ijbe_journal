<?php
/* Smarty version 4.3.1, created on 2025-05-12 16:51:42
  from 'app:submissionstart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6822190e1cd4e2_60827868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1181edaca862400c930883d415bbda6bb1924fe' => 
    array (
      0 => 'app:submissionstart.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6822190e1cd4e2_60827868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11800871206822190e1c9b17_66754294', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_11800871206822190e1c9b17_66754294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_11800871206822190e1c9b17_66754294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading app__pageHeading--center app__pageHeading--spacious">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.wizard.title"),$_smarty_tpl ) );?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getData('disableSubmissions')) {?>
		<notification>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.disableSubmissions.notAccepting"),$_smarty_tpl ) );?>

		</notification>
	<?php } else { ?>
		<panel>
			<panel-section>
				<start-submission-form
					class="startSubmissionPage__form"
					v-bind="form"
					@set="updateForm"
				></start-submission-form>
			</panel-section>
		</panel>
	<?php }
}
}
/* {/block "page"} */
}
