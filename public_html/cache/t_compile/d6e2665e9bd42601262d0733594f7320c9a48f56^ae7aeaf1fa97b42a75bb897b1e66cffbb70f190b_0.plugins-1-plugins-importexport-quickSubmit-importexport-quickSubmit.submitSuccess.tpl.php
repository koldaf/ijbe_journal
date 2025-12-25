<?php
/* Smarty version 4.3.1, created on 2025-05-12 18:31:02
  from 'plugins-1-plugins-importexport-quickSubmit-importexport-quickSubmit:submitSuccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_682230564b5648_23169406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae7aeaf1fa97b42a75bb897b1e66cffbb70f190b' => 
    array (
      0 => 'plugins-1-plugins-importexport-quickSubmit-importexport-quickSubmit:submitSuccess.tpl',
      1 => 1744029273,
      2 => 'plugins-1-plugins-importexport-quickSubmit-importexport-quickSubmit',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682230564b5648_23169406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_415897912682230564ac579_08590257', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_415897912682230564ac579_08590257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_415897912682230564ac579_08590257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.success"),$_smarty_tpl ) );?>

	</h1>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "submissionUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"workflow",'op'=>"access",'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'contextId'=>"submission",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

	<div class="app__contentPanel">
		<p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.successDescription"),$_smarty_tpl ) );?>

		</p>
		<p>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array(),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.successReturn"),$_smarty_tpl ) );?>

			</a>
		</p>
		<p>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"workflow",'op'=>"access",'path'=>$_smarty_tpl->tpl_vars['submissionId']->value,'escape'=>false),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.goToSubmission"),$_smarty_tpl ) );?>

			</a>
		</p>
	</div>
<?php
}
}
/* {/block "page"} */
}
