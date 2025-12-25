<?php
/* Smarty version 4.3.1, created on 2025-05-12 18:31:12
  from 'app:workfloweditorialLinkActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_682230609be8d6_97634166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c79fa2703e2177d8dc994cf33a598ba1897432' => 
    array (
      0 => 'app:workfloweditorialLinkActions.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682230609be8d6_97634166 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['decisions']->value) || count($_smarty_tpl->tpl_vars['recommendations']->value)) {?>
	<?php if (array_intersect(array(\PKP\security\Role::ROLE_ID_MANAGER,\PKP\security\Role::ROLE_ID_SUB_EDITOR),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
		<?php echo '<script'; ?>
>
			// Initialize JS handler.
			$(function() {
				$('#editorialActions').pkpHandler(
					'$.pkp.controllers.EditorialActionsHandler',
				);
			});
		<?php echo '</script'; ?>
>

		<div id="editorialActions" class="pkp_workflow_decisions">

						<?php if ($_smarty_tpl->tpl_vars['makeDecision']->value && count($_smarty_tpl->tpl_vars['decisions']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['lastDecision']->value) {?>
					<div class="pkp_workflow_last_decision">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['lastDecision']->value),$_smarty_tpl ) );?>

						<?php if ($_smarty_tpl->tpl_vars['canRecordDecision']->value) {?>
							<button class="pkp_workflow_change_decision">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.workflowDecision.changeDecision"),$_smarty_tpl ) );?>

							</button>
						<?php }?>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canRecordDecision']->value) {?>
					<ul class="pkp_workflow_decisions_options<?php if ($_smarty_tpl->tpl_vars['lastDecision']->value) {?> pkp_workflow_decisions_options_hidden<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['stageId']->value === (defined('WORKFLOW_STAGE_ID_PRODUCTION') ? constant('WORKFLOW_STAGE_ID_PRODUCTION') : null)) {?>
							<li>
								<button
									class="pkp_button pkp_button_primary"
									onClick="pkp.eventBus.$emit('open-tab', 'publication')"
								>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.schedulePublication"),$_smarty_tpl ) );?>

								</button>
							</li>
						<?php }?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['decisions']->value, 'decision');
$_smarty_tpl->tpl_vars['decision']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['decision']->value) {
$_smarty_tpl->tpl_vars['decision']->do_else = false;
?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "class", null);
if (in_array(get_class($_smarty_tpl->tpl_vars['decision']->value),$_smarty_tpl->tpl_vars['primaryDecisions']->value)) {?>pkp_button_primary<?php }
if (in_array(get_class($_smarty_tpl->tpl_vars['decision']->value),$_smarty_tpl->tpl_vars['warnableDecisions']->value)) {?>pkp_button_offset<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "url", null);
echo $_smarty_tpl->tpl_vars['decision']->value->getUrl(\APP\core\Application::get()->getRequest(),$_smarty_tpl->tpl_vars['currentContext']->value,$_smarty_tpl->tpl_vars['submission']->value,$_smarty_tpl->tpl_vars['reviewRoundId']->value);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<li>
								<?php if ($_smarty_tpl->tpl_vars['decision']->value->getDecision() === \APP\decision\Decision::PENDING_REVISIONS) {?>
									<button class="pkp_button <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" data-decision="<?php echo $_smarty_tpl->tpl_vars['decision']->value->getDecision();?>
" data-review-round-id="<?php echo $_smarty_tpl->tpl_vars['reviewRoundId']->value;?>
">
										<?php echo $_smarty_tpl->tpl_vars['decision']->value->getLabel();?>

									</button>
								<?php } else { ?>
									<a href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 class="pkp_button <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
										<?php echo $_smarty_tpl->tpl_vars['decision']->value->getLabel();?>

									</a>
								<?php }?>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['allRecommendations']->value) {?>
					<div class="pkp_workflow_recommendations">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.allRecommendations.display",'recommendations'=>$_smarty_tpl->tpl_vars['allRecommendations']->value),$_smarty_tpl ) );?>

					</div>
				<?php }?>

						<?php } elseif ($_smarty_tpl->tpl_vars['makeRecommendation']->value && count($_smarty_tpl->tpl_vars['recommendations']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['lastRecommendation']->value) {?>
					<div class="pkp_workflow_last_decision">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.recommendation.display",'recommendation'=>$_smarty_tpl->tpl_vars['lastRecommendation']->value),$_smarty_tpl ) );?>

						<?php if ($_smarty_tpl->tpl_vars['canRecordDecision']->value) {?>
							<button class="pkp_workflow_change_decision">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.changeRecommendation"),$_smarty_tpl ) );?>

							</button>
						<?php }?>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canRecordDecision']->value) {?>
					<ul class="pkp_workflow_decisions_options<?php if ($_smarty_tpl->tpl_vars['lastRecommendation']->value) {?> pkp_workflow_decisions_options_hidden<?php }?>">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommendations']->value, 'recommendation');
$_smarty_tpl->tpl_vars['recommendation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recommendation']->value) {
$_smarty_tpl->tpl_vars['recommendation']->do_else = false;
?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "url", null);
echo $_smarty_tpl->tpl_vars['recommendation']->value->getUrl(\APP\core\Application::get()->getRequest(),$_smarty_tpl->tpl_vars['currentContext']->value,$_smarty_tpl->tpl_vars['submission']->value,$_smarty_tpl->tpl_vars['reviewRoundId']->value);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<li>
								<?php if ($_smarty_tpl->tpl_vars['recommendation']->value->getDecision() === \APP\decision\Decision::RECOMMEND_PENDING_REVISIONS) {?>
									<button class="pkp_button" data-recommendation="<?php echo $_smarty_tpl->tpl_vars['recommendation']->value->getDecision();?>
" data-review-round-id="<?php echo $_smarty_tpl->tpl_vars['reviewRoundId']->value;?>
">
										<?php echo $_smarty_tpl->tpl_vars['recommendation']->value->getLabel();?>

									</button>
								<?php } else { ?>
									<a href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 class="pkp_button">
										<?php echo $_smarty_tpl->tpl_vars['recommendation']->value->getLabel();?>

									</a>
								<?php }?>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				<?php } else { ?>
					<div class="pkp_no_workflow_decisions">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.recommendation.noDecidingEditors"),$_smarty_tpl ) );?>

					</div>
				<?php }?>
			<?php }?>
		</div>
	<?php }
} elseif (!$_smarty_tpl->tpl_vars['editorsAssigned']->value && array_intersect(array(\PKP\security\Role::ROLE_ID_MANAGER,\PKP\security\Role::ROLE_ID_SUB_EDITOR),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
	<div class="pkp_no_workflow_decisions">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.decision.noDecisionsAvailable"),$_smarty_tpl ) );?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['lastDecision']->value) {?>
	<div class="pkp_no_workflow_decisions">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['lastDecision']->value),$_smarty_tpl ) );?>

	</div>
<?php }
}
}
