<?php
/* Smarty version 4.3.1, created on 2025-05-10 05:44:25
  from 'plugins-1-plugins-importexport-quickSubmit-importexport-quickSubmit:section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_681ed9a97c4bc7_92390489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b325f7d6ea8f049185d4836ae335a6f843f183fc' => 
    array (
      0 => 'plugins-1-plugins-importexport-quickSubmit-importexport-quickSubmit:section.tpl',
      1 => 1744029273,
      2 => 'plugins-1-plugins-importexport-quickSubmit-importexport-quickSubmit',
    ),
  ),
  'includes' => 
  array (
    'app:submission/form/sectionPolicy.tpl' => 1,
  ),
),false)) {
function content_681ed9a97c4bc7_92390489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('sectionDescription', '');
if (!$_smarty_tpl->tpl_vars['readOnly']->value) {?>
	<?php $_smarty_tpl->_assignInScope('sectionDescription', "author.submit.journalSectionDescription");
}
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"section.section"));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('title'=>"section.section"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"sectionId",'label'=>$_smarty_tpl->tpl_vars['sectionDescription']->value,'from'=>$_smarty_tpl->tpl_vars['sectionOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['sectionId']->value,'translate'=>false,'disabled'=>$_smarty_tpl->tpl_vars['readOnly']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'required'=>true),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('title'=>"section.section"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionPolicies']->value, 'content', false, 'sectionPolicySectionId');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionPolicySectionId']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
	<?php $_smarty_tpl->_subTemplateRender("app:submission/form/sectionPolicy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sectionId'=>$_smarty_tpl->tpl_vars['sectionPolicySectionId']->value,'content'=>$_smarty_tpl->tpl_vars['content']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
