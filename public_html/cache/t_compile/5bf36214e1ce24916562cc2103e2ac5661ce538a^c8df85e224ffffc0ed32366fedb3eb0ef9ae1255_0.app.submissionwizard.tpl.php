<?php
/* Smarty version 4.3.1, created on 2025-05-12 17:05:10
  from 'app:submissionwizard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68221c361176b1_90094339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8df85e224ffffc0ed32366fedb3eb0ef9ae1255' => 
    array (
      0 => 'app:submissionwizard.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68221c361176b1_90094339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164680547868221c36105874_08954978', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_164680547868221c36105874_08954978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_164680547868221c36105874_08954978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="submissionWizard">
        <div class="submissionWizard__submissionDetails">
            {{ submission.id }}
            <template v-if="publication.authorsStringShort">
                <span class="app__breadcrumbsSeparator" aria-hidden="true">/</span>
                {{ publication.authorsStringShort }}
            </template>
            <template v-if="localize(publication.title)">
                <span class="app__breadcrumbsSeparator" aria-hidden="true">/</span>
                <span v-strip-unsafe-html="localize(publication.title)">
            </template>
        </div>
        <h1 class="app__pageHeading" ref="pageTitle">
            {{ pageTitle }}
            <pkp-button
                :is-disabled="isDisconnected"
                @click="saveForLater"
            >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reviewer.submission.saveReviewForLater"),$_smarty_tpl ) );?>

            </pkp-button>
        </h1>
        <?php if ($_smarty_tpl->tpl_vars['submittingTo']->value) {?>
            <div id="submission-configuration" class="submissionWizard__submissionConfiguration">
                <?php echo $_smarty_tpl->tpl_vars['submittingTo']->value;?>

                <button
                    class="-linkButton"
                    aria-describedby="submission-configuration"
                    @click="$modal.show('config')"
                >
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.reviewerSearch.change"),$_smarty_tpl ) );?>

                </button>
                <modal
                    close-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.close"),$_smarty_tpl ) );?>
"
                    name="config"
                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.wizard.changeSubmission"),$_smarty_tpl ) );?>
"
                >
                    <pkp-form
                        v-bind="components.reconfigureSubmission"
                        @set="set"
                        @success="reconfigureSubmission"
                    ></pkp-form>
                </modal>
            </div>
        <?php }?>
        <steps
            class="submissionWizard__steps"
            :current="currentStep.id"
            :started-steps="startedSteps"
            label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.wizard.completeSteps"),$_smarty_tpl ) );?>
"
            progress-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.showingSteps"),$_smarty_tpl ) );?>
"
            :scroll-to="$refs.pageTitle"
            show-steps-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.showAllSteps"),$_smarty_tpl ) );?>
"
            @step:open="openStep"
        >
            <step
                v-for="step in steps"
                :key="step.id"
                :id="step.id"
                :label="step.name"
            >
                <panel>
                    <panel-section v-for="section in step.sections" :key="section.id">
                        <template slot="header">
                            <h2>{{ section.name }}</h2>
                            <div v-strip-unsafe-html="section.description" />
                        </template>
                        <pkp-form
                            v-if="section.type === 'form'"
                            v-bind="section.form"
                            ref="autosaveForms"
                            class="submissionWizard__stepForm"
                            @set="updateAutosaveForm"
                        ></pkp-form>
                        <submission-files-list-panel
                            v-else-if="section.type === 'files'"
                            v-bind="components.submissionFiles"
                            @set="set"
                        ></submission-files-list-panel>
                        <contributors-list-panel
                            v-else-if="section.type === 'contributors'"
                            v-bind="components.contributors"
                            :items="publication.authors"
                            :publication="publication"
                            @updated:contributors="setContributors"
                            @updated:publication="setPublication"
                        ></contributors-list-panel>
                        <template v-else-if="section.type === 'review'">
                            <notification
                                v-if="Object.keys(errors).length" type="warning"
                                class="submissionWizard__review_errors"
                            >
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.wizard.errors"),$_smarty_tpl ) );?>

                            </notification>
                            <template>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviewSteps']->value, 'step');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['step']->value['reviewTemplate']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['step']->value['reviewTemplate'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php }?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::SubmissionWizard::Section::Review",'submission'=>$_smarty_tpl->tpl_vars['submission']->value,'step'=>$_smarty_tpl->tpl_vars['step']->value['id']),$_smarty_tpl ) );?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </template>
                            <transition name="submissionWizard__reviewLoading">
                                <span
                                    v-if="isAutosaving || isValidating"
                                    role="alert"
                                    class="submissionWizard__loadingReview"
                                >
                                    <spinner></spinner>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.wizard.validating"),$_smarty_tpl ) );?>

                                </span>
                            </transition>
                        </template>
                        <pkp-form
                            v-if="section.type === 'confirm'"
                            v-bind="section.form"
                            class="submissionWizard__stepForm"
                            @set="updateForm"
                        ></pkp-form>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::SubmissionWizard::Section",'submission'=>$_smarty_tpl->tpl_vars['submission']->value),$_smarty_tpl ) );?>

                    </panel-section>
                </panel>
            </step>
        </steps>

        <button-row class="submissionWizard__footer">
            <template slot="end">
                <pkp-button
                    v-if="!isOnFirstStep"
                    :is-warnable="true"
                    @click="previousStep"
                >
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.back"),$_smarty_tpl ) );?>

                </pkp-button>
                <!--
                    Leave this v-else in so that the slot
                    is never empty.
                -->
                <span v-else></span>
            </template>
            <span
                role="status"
                aria-live="polite"
                class="submissionWizard__lastSaved"
                :class="isDisconnected ? 'submissionWizard__lastSaved--disconnected' : ''"
            >
                <spinner v-if="isAutosaving || isDisconnected"></spinner>
                <template v-if="isAutosaving">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.saving"),$_smarty_tpl ) );?>

                </template>
                <template v-else-if="isDisconnected">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.reconnecting"),$_smarty_tpl ) );?>

                </template>
                <template v-else-if="lastAutosavedMessage">
                    {{ lastAutosavedMessage }}
                </template>
            </span>
            <pkp-button
                :is-disabled="isDisconnected"
                @click="saveForLater"
            >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reviewer.submission.saveReviewForLater"),$_smarty_tpl ) );?>

            </pkp-button>
            <pkp-button
                :is-primary="true"
                :is-disabled="isOnLastStep && !canSubmit"
                @click="nextStep"
            >
                <template v-if="isOnLastStep">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"form.submit"),$_smarty_tpl ) );?>

                </template>
                <template v-else>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.continue"),$_smarty_tpl ) );?>

                </template>
            </pkp-button>
        </button-row>
    </div>
<?php
}
}
/* {/block "page"} */
}
