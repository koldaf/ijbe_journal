<?php
/* Smarty version 4.3.1, created on 2025-05-13 06:02:59
  from 'app:managementdois.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6822d283bc8c03_79242673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '057ddee2b44e8a610cac9b8d5baa1125db0a1592' => 
    array (
      0 => 'app:managementdois.tpl',
      1 => 1732910684,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6822d283bc8c03_79242673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6583853156822d283bbcff6_66411895', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_6583853156822d283bbcff6_66411895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_6583853156822d283bbcff6_66411895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!-- Add page content here -->
	<h1 class="app__pageHeading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"doi.manager.displayName"),$_smarty_tpl ) );?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getData('enableDois') && !$_smarty_tpl->tpl_vars['currentContext']->value->getData('doiPrefix')) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'doiSettingsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"management",'op'=>"settings",'path'=>"distribution",'anchor'=>"dois"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<notification class="pkpNotification--backendPage__header" type="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.dois.settings.prefixRequired",'doiSettingsUrl'=>$_smarty_tpl->tpl_vars['doiSettingsUrl']->value),$_smarty_tpl ) );?>
</notification>
	<?php }?>

	<tabs :track-history="true">
        <?php if ($_smarty_tpl->tpl_vars['displaySubmissionsTab']->value) {?>
			<tab id="submission-doi-management" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.articles"),$_smarty_tpl ) );?>
">
				<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.articles"),$_smarty_tpl ) );?>
</h1>
				<doi-list-panel
						v-bind="components.submissionDoiListPanel"
						@set="set"
				/>
			</tab>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['displayIssuesTab']->value) {?>
			<tab id="issue-doi-management" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issues"),$_smarty_tpl ) );?>
">
				<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.issues"),$_smarty_tpl ) );?>
</h1>
				<doi-list-panel
						v-bind="components.issueDoiListPanel"
						@set="set"
				/>
			</tab>
        <?php }?>
	</tabs>
<?php
}
}
/* {/block "page"} */
}
