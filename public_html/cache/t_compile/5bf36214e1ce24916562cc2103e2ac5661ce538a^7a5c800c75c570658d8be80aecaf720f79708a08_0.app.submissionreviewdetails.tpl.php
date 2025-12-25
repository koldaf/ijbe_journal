<?php
/* Smarty version 4.3.1, created on 2025-05-12 17:05:10
  from 'app:submissionreviewdetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68221c36167297_39338812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a5c800c75c570658d8be80aecaf720f79708a08' => 
    array (
      0 => 'app:submissionreviewdetails.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:/submission/review-publication-field.tpl' => 3,
  ),
),false)) {
function content_68221c36167297_39338812 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'locale', false, 'localeKey');
$_smarty_tpl->tpl_vars['locale']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->do_else = false;
?>
    <div class="submissionWizard__reviewPanel">
        <div class="submissionWizard__reviewPanel__header">
            <h3 id="review<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['id'] ));?>
">
                <?php if (count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.withParenthesis",'item'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['reviewName'] )),'inParenthesis'=>$_smarty_tpl->tpl_vars['locale']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value['reviewName'] ));?>

                <?php }?>
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
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.title"),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"title",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable1,'type'=>"html"), 0, true);
?>
            <?php  $_prefixVariable2 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable3 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('keywords'),array($_prefixVariable2::METADATA_REQUEST,$_prefixVariable3::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.keywords"),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"keywords",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable4,'type'=>"array"), 0, true);
?>
            <?php }?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.abstract"),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"abstract",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable5,'type'=>"html"), 0, true);
?>
            <?php  $_prefixVariable6 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable7 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('citations'),array($_prefixVariable6::METADATA_REQUEST,$_prefixVariable7::METADATA_REQUIRE))) {?>
                <?php if ($_smarty_tpl->tpl_vars['localeKey']->value === $_smarty_tpl->tpl_vars['submission']->value->getData('locale')) {?>
                    <div class="submissionWizard__reviewPanel__item">
                        <template v-if="errors.citationsRaw">
                            <notification
                                v-for="(error, i) in errors.citationsRaw"
                                :key="i"
                                type="warning"
                            >
                                <icon icon="exclamation-triangle"></icon>
                                {{ error }}
                            </notification>
                        </template>
                        <h4 class="submissionWizard__reviewPanel__item__header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>

                        </h4>
                        <div class="submissionWizard__reviewPanel__item__value">
                            <template v-if="!publication.citationsRaw">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.noneProvided"),$_smarty_tpl ) );?>

                            </template>
                            <div
                                v-else
                                v-for="(citation, index) in publication.citationsRaw.trim().split(/(?:\r\n|\r|\n)/g).filter(c => c)"
                                :key="index"
                                class="submissionWizard__reviewPanel__citation"
                            >
                                {{ citation }}
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::SubmissionWizard::Section::Review::Details",'submission'=>$_smarty_tpl->tpl_vars['submission']->value,'step'=>$_smarty_tpl->tpl_vars['step']->value['id']),$_smarty_tpl ) );?>

        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
