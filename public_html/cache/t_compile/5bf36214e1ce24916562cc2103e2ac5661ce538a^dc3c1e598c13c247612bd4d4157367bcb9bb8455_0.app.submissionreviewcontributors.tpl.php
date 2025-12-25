<?php
/* Smarty version 4.3.1, created on 2025-05-12 17:05:10
  from 'app:submissionreviewcontributors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68221c36182483_33946561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc3c1e598c13c247612bd4d4157367bcb9bb8455' => 
    array (
      0 => 'app:submissionreviewcontributors.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68221c36182483_33946561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="submissionWizard__reviewPanel">
    <div class="submissionWizard__reviewPanel__header">
        <h3 id="review<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['id'] ));?>
">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['reviewName'] ));?>

        </h3>
        <pkp-button
            aria-describedby="review<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['id'] ));?>
"
            class="submissionWizard__reviewPanel__edit"
            @click="openStep('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['id'] ));?>
')"
        >
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.edit"),$_smarty_tpl ) );?>

        </pkp-button>
    </div>
    <div
        class="
            submissionWizard__reviewPanel__body
            submissionWizard__reviewPanel__body--<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['id'] ));?>

        "
    >
        <notification v-if="!publication.authors.length" type="warning" class="submissionWizard__reviewEmptyWarning">
            <icon icon="exclamation-triangle" :inline="true"></icon>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.wizard.noContributors"),$_smarty_tpl ) );?>

        </notification>
        <ul
            v-else
            class="submissionWizard__reviewPanel__list"
        >
            <li
                v-for="(error, i) in errors.contributors"
                :key="i"
            >
                <notification type="warning">
                    <icon icon="exclamation-triangle" :inline="true"></icon>
                    {{ error }}
                </notification>
            </li>
            <li
                v-for="author in publication.authors"
                :key="author.id"
                class="submissionWizard__reviewPanel__item__value"
            >
                <span
                    class="submissionWizard__reviewPanel__list__name"
                >
                    {{ getAuthorName(author) }}
                </span>
                <span
                    class="submissionWizard__reviewPanel__list__actions"
                >
                    <badge
                        v-if="publication.primaryContactId === author.id"
                        :is-primary="true"
                    >
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"author.users.contributor.principalContact"),$_smarty_tpl ) );?>

                    </badge>
                    <badge>{{ localize(author.userGroupName) }}</badge>
                </span>
            </li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::SubmissionWizard::Section::Review::Contributors",'submission'=>$_smarty_tpl->tpl_vars['submission']->value,'step'=>$_smarty_tpl->tpl_vars['step']->value['id']),$_smarty_tpl ) );?>

        </ul>
    </div>
</div><?php }
}
