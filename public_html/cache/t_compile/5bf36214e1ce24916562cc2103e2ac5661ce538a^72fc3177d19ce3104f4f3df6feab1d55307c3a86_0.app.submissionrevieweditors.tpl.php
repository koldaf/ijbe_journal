<?php
/* Smarty version 4.3.1, created on 2025-05-12 17:05:10
  from 'app:submissionrevieweditors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68221c3619aff0_83899247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72fc3177d19ce3104f4f3df6feab1d55307c3a86' => 
    array (
      0 => 'app:submissionrevieweditors.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:/submission/review-publication-field.tpl' => 9,
  ),
),false)) {
function content_68221c3619aff0_83899247 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php  $_prefixVariable8 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable9 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('subjects'),array($_prefixVariable8::METADATA_REQUEST,$_prefixVariable9::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.subjects"),$_smarty_tpl ) );
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"subjects",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable10,'type'=>"array"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable11 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable12 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('disciplines'),array($_prefixVariable11::METADATA_REQUEST,$_prefixVariable12::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.discipline"),$_smarty_tpl ) );
$_prefixVariable13=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"disciplines",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable13,'type'=>"array"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable14 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable15 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('languages'),array($_prefixVariable14::METADATA_REQUEST,$_prefixVariable15::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.languages"),$_smarty_tpl ) );
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"languages",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable16,'type'=>"array"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable17 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable18 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('agencies'),array($_prefixVariable17::METADATA_REQUEST,$_prefixVariable18::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.supportingAgencies"),$_smarty_tpl ) );
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"supportingAgencies",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable19,'type'=>"array"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable20 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable21 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('coverage'),array($_prefixVariable20::METADATA_REQUEST,$_prefixVariable21::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.metadata.coverage"),$_smarty_tpl ) );
$_prefixVariable22=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"coverage",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable22,'type'=>"string"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable23 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable24 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('rights'),array($_prefixVariable23::METADATA_REQUEST,$_prefixVariable24::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.rights"),$_smarty_tpl ) );
$_prefixVariable25=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"rights",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable25,'type'=>"string"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable26 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable27 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('source'),array($_prefixVariable26::METADATA_REQUEST,$_prefixVariable27::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.source"),$_smarty_tpl ) );
$_prefixVariable28=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"source",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable28,'type'=>"string"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable29 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable30 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('type'),array($_prefixVariable29::METADATA_REQUEST,$_prefixVariable30::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.type"),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"type",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable31,'type'=>"string"), 0, true);
?>
            <?php }?>
            <?php  $_prefixVariable32 = $_smarty_tpl->tpl_vars['currentContext']->value;
$_prefixVariable33 = $_smarty_tpl->tpl_vars['currentContext']->value;
if (in_array($_smarty_tpl->tpl_vars['currentContext']->value->getData('dataAvailability'),array($_prefixVariable32::METADATA_REQUEST,$_prefixVariable33::METADATA_REQUIRE))) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.dataAvailability"),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
$_smarty_tpl->_subTemplateRender("app:/submission/review-publication-field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prop'=>"dataAvailability",'inLocale'=>$_smarty_tpl->tpl_vars['localeKey']->value,'name'=>$_prefixVariable34,'type'=>"html"), 0, true);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['localeKey']->value === $_smarty_tpl->tpl_vars['submission']->value->getData('locale')) {?>
                <?php if ($_smarty_tpl->tpl_vars['isCategoriesEnabled']->value) {?>
                    <div class="submissionWizard__reviewPanel__item">
                        <h4 class="submissionWizard__reviewPanel__item__header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.placement.categories"),$_smarty_tpl ) );?>

                        </h4>
                        <ul
                            v-if="currentCategoryTitles.length"
                            class="submissionWizard__reviewPanel__item__value"
                        >
                            <li
                                v-for="currentCategoryTitle in currentCategoryTitles"
                                :key="currentCategoryTitle"
                            >
                                {{ currentCategoryTitle }}
                            </li>
                        </ul>
                        <div
                            v-else
                            class="submissionWizard__reviewPanel__item__value"
                        >
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.noneSelected"),$_smarty_tpl ) );?>

                        </div>
                    </div>
                <?php }?>
                <div class="submissionWizard__reviewPanel__item">
                    <h4 class="submissionWizard__reviewPanel__item__header">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.coverNote"),$_smarty_tpl ) );?>

                    </h4>
                    <div
                        v-if="submission.commentsForTheEditors"
                        class="submissionWizard__reviewPanel__item__value"
                        v-strip-unsafe-html="submission.commentsForTheEditors"
                    ></div>
                    <div v-else class="submissionWizard__reviewPanel__item__value">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.none"),$_smarty_tpl ) );?>

                    </div>
                </div>
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::SubmissionWizard::Section::Review::Editors",'submission'=>$_smarty_tpl->tpl_vars['submission']->value,'step'=>$_smarty_tpl->tpl_vars['step']->value['id']),$_smarty_tpl ) );?>

        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
