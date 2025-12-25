<?php
/* Smarty version 4.3.1, created on 2025-05-12 17:05:10
  from 'app:submissionreviewpublicationfield.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68221c36174ab4_99132380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19badbcbf051aaab3329a528adccb2f80197c35c' => 
    array (
      0 => 'app:submissionreviewpublicationfield.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68221c36174ab4_99132380 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['inLocale']->value) {?>
    <?php $_smarty_tpl->_assignInScope('localizedProp', ((($_smarty_tpl->tpl_vars['prop']->value).("['")).($_smarty_tpl->tpl_vars['inLocale']->value)).("']"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('localizedProp', $_smarty_tpl->tpl_vars['prop']->value);
}?>

<div class="submissionWizard__reviewPanel__item">
    <template v-if="errors.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prop']->value ));?>
 && errors.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>
">
        <notification
            v-for="(error, i) in errors.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>
"
            :key="i"
            type="warning"
        >
            <icon icon="exclamation-triangle"></icon>
            {{ error }}
        </notification>
    </template>
    <h4 class="submissionWizard__reviewPanel__item__header">
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    </h4>
    <div
        class="submissionWizard__reviewPanel__item__value"
        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'html') {?>
            v-strip-unsafe-html="publication.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>

                ? publication.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>

                : '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.noneProvided"),$_smarty_tpl ) );?>
'"
        <?php }?>
    >
        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'array') {?>
            <template v-if="publication.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>
 && publication.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>
.length">
                {{
                    publication.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>

                        .join(
                            __('common.commaListSeparator')
                        )
                }}
            </template>
            <template v-else>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.noneProvided"),$_smarty_tpl ) );?>

            </template>
        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === 'html') {?>
                    <?php } else { ?>
            <template v-if="publication.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>
">
                {{ publication.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localizedProp']->value ));?>
 }}
            </template>
            <template v-else>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.noneProvided"),$_smarty_tpl ) );?>

            </template>
        <?php }?>
    </div>
</div><?php }
}
