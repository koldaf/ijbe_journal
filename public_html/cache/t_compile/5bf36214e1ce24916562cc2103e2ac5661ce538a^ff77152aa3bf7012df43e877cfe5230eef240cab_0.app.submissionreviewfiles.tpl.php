<?php
/* Smarty version 4.3.1, created on 2025-05-12 17:05:10
  from 'app:submissionreviewfiles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68221c3617b5c0_21846961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff77152aa3bf7012df43e877cfe5230eef240cab' => 
    array (
      0 => 'app:submissionreviewfiles.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68221c3617b5c0_21846961 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="submissionWizard__reviewPanel">
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
        <notification
            v-for="(error, i) in errors.files"
            :key="i"
            type="warning"
            class="submissionWizard__reviewEmptyWarning"
        >
            <icon icon="exclamation-triangle" :inline="true"></icon>
            {{ error }}
        </notification>
        <ul class="submissionWizard__reviewPanel__list">
            <li
                v-for="file in components.submissionFiles.items"
                :key="file.id"
                class="submissionWizard__reviewPanel__item__value"
            >
                <a :href="file.url" class="submissionWizard__reviewPanel__fileLink">
                    <file
                        :document-type="file.documentType"
                        :name="localize(file.name)"
                    ></file>
                </a>
                <span
                    class="submissionWizard__reviewPanel__list__actions"
                >
                    <badge v-if="file.genreId" :is-primary="!file.genreIsSupplementary">
                        {{ localize(file.genreName) }}
                    </badge>
                </span>
            </li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::SubmissionWizard::Section::Review::Files",'submission'=>$_smarty_tpl->tpl_vars['submission']->value,'step'=>$_smarty_tpl->tpl_vars['step']->value['id']),$_smarty_tpl ) );?>

        </ul>
    </div>
</div><?php }
}
