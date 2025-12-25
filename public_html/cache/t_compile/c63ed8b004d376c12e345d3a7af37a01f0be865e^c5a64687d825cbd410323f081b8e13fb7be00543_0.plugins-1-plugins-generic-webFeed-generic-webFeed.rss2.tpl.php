<?php
/* Smarty version 4.3.1, created on 2025-05-20 03:13:07
  from 'plugins-1-plugins-generic-webFeed-generic-webFeed:rss2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_682be533b6ca87_55211917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a64687d825cbd410323f081b8e13fb7be00543' => 
    array (
      0 => 'plugins-1-plugins-generic-webFeed-generic-webFeed:rss2.tpl',
      1 => 1732910780,
      2 => 'plugins-1-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682be533b6ca87_55211917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/ijbe/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo '<?'; ?>
xml version="1.0" encoding="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
"<?php echo '?>'; ?>

<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://web.resource.org/cc/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<atom:link href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" rel="self" type="application/rss+xml" />
				<title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getLocalizedName()),"html" ));?>
</title>
		<link><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('context'=>$_smarty_tpl->tpl_vars['context']->value->getPath()),$_smarty_tpl ) );?>
</link>

		<?php if ($_smarty_tpl->tpl_vars['context']->value->getLocalizedDescription()) {?>
			<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['context']->value->getLocalizedDescription());?>
		<?php } elseif ($_smarty_tpl->tpl_vars['context']->value->getLocalizedData('searchDescription')) {?>
			<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['context']->value->getLocalizedData('searchDescription'));?>
		<?php }?>

		<description><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['description']->value),"html" ));?>
</description>

				<?php if ($_smarty_tpl->tpl_vars['context']->value->getPrimaryLocale()) {?>
			<language><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',smarty_modifier_replace($_smarty_tpl->tpl_vars['context']->value->getPrimaryLocale(),'_','-')),"html" ));?>
</language>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['context']->value->getLocalizedData('licenseTerms')) {?>
			<copyright><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getLocalizedData('licenseTerms')),"html" ));?>
</copyright>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['context']->value->getData('contactEmail')) {?>
			<managingEditor><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getData('contactEmail')),"html" ));
if ($_smarty_tpl->tpl_vars['context']->value->getData('contactName')) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getData('contactName')),"html" ));?>
)<?php }?></managingEditor>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['context']->value->getData('supportEmail')) {?>
			<webMaster><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getData('supportEmail')),"html" ));
if ($_smarty_tpl->tpl_vars['context']->value->getData('contactName')) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getData('supportName')),"html" ));?>
)<?php }?></webMaster>
		<?php }?>

		<pubDate><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestDate']->value,(defined('DATE_RSS') ? constant('DATE_RSS') : null) ));?>
</pubDate>

						
		<generator><?php echo $_smarty_tpl->tpl_vars['applicationName']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applicationVersion']->value ));?>
</generator>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<ttl>60</ttl>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissions']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('submission', $_smarty_tpl->tpl_vars['item']->value['submission']);?>
			<?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['submission']->value->getCurrentPublication());?>
			<item>
								<title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['publication']->value->getLocalizedTitle()),"html" ));?>
</title>
				<link><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['publicationPage']->value,'op'=>$_smarty_tpl->tpl_vars['publicationOp']->value,'path'=>$_smarty_tpl->tpl_vars['submission']->value->getBestId()),$_smarty_tpl ) );?>
</link>
				<?php if ($_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('abstract') || $_smarty_tpl->tpl_vars['includeIdentifiers']->value) {?>
					<description>
						<?php if ($_smarty_tpl->tpl_vars['includeIdentifiers']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['identifiers'], 'identifier');
$_smarty_tpl->tpl_vars['identifier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['identifier']->value) {
$_smarty_tpl->tpl_vars['identifier']->do_else = false;
?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['identifier']->value['label']),"html" ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',implode(', ',$_smarty_tpl->tpl_vars['identifier']->value['values'])),"html" ));?>
&lt;br /&gt;
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>							&lt;br /&gt;
						<?php }?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('abstract')),"html" ));?>

					</description>
				<?php }?>

												<?php if (!empty($_smarty_tpl->tpl_vars['publication']->value->getAuthorString($_smarty_tpl->tpl_vars['userGroups']->value))) {?>
					<dc:creator><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getAuthorString($_smarty_tpl->tpl_vars['userGroups']->value),"html" ));?>
</dc:creator>
				<?php }?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['identifiers'], 'identifier');
$_smarty_tpl->tpl_vars['identifier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['identifier']->value) {
$_smarty_tpl->tpl_vars['identifier']->do_else = false;
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['identifier']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
						<category domain="https://pkp.sfu.ca/<?php echo $_smarty_tpl->tpl_vars['applicationIdentifier']->value;?>
/category/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['identifier']->value['type']),"html" ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['value']->value),"html" ));?>
</category>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>								
				<dc:rights>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightYear'=>$_smarty_tpl->tpl_vars['publication']->value->getData('copyrightYear'),'copyrightHolder'=>$_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('copyrightHolder')),$_smarty_tpl ) ) ));?>

					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('licenseUrl') ));?>

				</dc:rights>
				<cc:license <?php if (($_smarty_tpl->tpl_vars['openAccess']->value === null || $_smarty_tpl->tpl_vars['openAccess']->value === $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus')) && $_smarty_tpl->tpl_vars['publication']->value->isCCLicense()) {?>rdf:resource="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('licenseUrl') ));?>
"<?php }?> />
				<guid isPermaLink="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['publicationPage']->value,'op'=>$_smarty_tpl->tpl_vars['publicationOp']->value,'path'=>$_smarty_tpl->tpl_vars['submission']->value->getBestId()),$_smarty_tpl ) );?>
</guid>
				<pubDate><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),(defined('DATE_RSS') ? constant('DATE_RSS') : null) ));?>
</pubDate>
			</item>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	</channel>
</rss>
<?php }
}
