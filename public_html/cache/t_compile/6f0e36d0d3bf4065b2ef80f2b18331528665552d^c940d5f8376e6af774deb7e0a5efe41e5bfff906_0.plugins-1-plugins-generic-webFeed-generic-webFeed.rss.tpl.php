<?php
/* Smarty version 4.3.1, created on 2025-05-20 03:13:20
  from 'plugins-1-plugins-generic-webFeed-generic-webFeed:rss.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_682be54093c7d7_80657574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c940d5f8376e6af774deb7e0a5efe41e5bfff906' => 
    array (
      0 => 'plugins-1-plugins-generic-webFeed-generic-webFeed:rss.tpl',
      1 => 1732910780,
      2 => 'plugins-1-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682be54093c7d7_80657574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/ijbe/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo '<?'; ?>
xml version="1.0" encoding="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
"<?php echo '?>'; ?>

<rdf:RDF
	xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	xmlns="http://purl.org/rss/1.0/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:prism="http://prismstandard.org/namespaces/1.2/basic/"
	xmlns:cc="http://web.resource.org/cc/"
	xmlns:taxo="http://purl.org/rss/1.0/modules/taxonomy/">

	<channel rdf:about="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('context'=>$_smarty_tpl->tpl_vars['context']->value->getPath()),$_smarty_tpl ) );?>
">
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

				<?php $_smarty_tpl->_assignInScope('publisherInstitution', $_smarty_tpl->tpl_vars['context']->value->getData('publisherInstitution'));?>
		<?php if ($_smarty_tpl->tpl_vars['publisherInstitution']->value) {?>
			<dc:publisher><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['publisherInstitution']->value),"html" ));?>
</dc:publisher>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['context']->value->getPrimaryLocale()) {?>
			<dc:language><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',smarty_modifier_replace($_smarty_tpl->tpl_vars['context']->value->getPrimaryLocale(),'_','-')),"html" ));?>
</dc:language>
		<?php }?>

		<prism:publicationName><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getLocalizedName()),"html" ));?>
</prism:publicationName>

		<?php if ($_smarty_tpl->tpl_vars['context']->value->getData('printIssn')) {?>
			<?php $_smarty_tpl->_assignInScope('ISSN', $_smarty_tpl->tpl_vars['context']->value->getData('printIssn'));?>
		<?php } elseif ($_smarty_tpl->tpl_vars['context']->value->getData('onlineIssn')) {?>
			<?php $_smarty_tpl->_assignInScope('ISSN', $_smarty_tpl->tpl_vars['context']->value->getData('onlineIssn'));?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ISSN']->value) {?>
			<prism:issn><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ISSN']->value ));?>
</prism:issn>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['context']->value->getLocalizedData('licenseTerms')) {?>
			<prism:copyright><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['context']->value->getLocalizedData('licenseTerms')),"html" ));?>
</prism:copyright>
		<?php }?>

		<items>
			<rdf:Seq>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissions']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<rdf:li rdf:resource="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['publicationPage']->value,'op'=>$_smarty_tpl->tpl_vars['publicationOp']->value,'path'=>$_smarty_tpl->tpl_vars['item']->value['submission']->getBestId()),$_smarty_tpl ) );?>
"/>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>			</rdf:Seq>
		</items>
	</channel>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissions']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
	<?php $_smarty_tpl->_assignInScope('submission', $_smarty_tpl->tpl_vars['item']->value['submission']);?>
	<?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['submission']->value->getCurrentPublication());?>
	<item rdf:about="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['publicationPage']->value,'op'=>$_smarty_tpl->tpl_vars['publicationOp']->value,'path'=>$_smarty_tpl->tpl_vars['submission']->value->getBestId()),$_smarty_tpl ) );?>
">

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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>					&lt;br /&gt;
				<?php }?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('abstract')),"html" ));?>

			</description>
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
				<dc:subject>
					<rdf:Description>
						<taxo:topic rdf:resource="https://pkp.sfu.ca/<?php echo $_smarty_tpl->tpl_vars['applicationIdentifier']->value;?>
/category/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['identifier']->value['type']),"html" ));?>
" />
						<rdf:value><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['value']->value),"html" ));?>
</rdf:value>
					</rdf:Description>
				</dc:subject>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getData('authors'), 'author', false, NULL, 'authorList', array (
));
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
			<dc:creator><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['author']->value->getFullName(false)),"html" ));?>
</dc:creator>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<dc:rights>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightYear'=>$_smarty_tpl->tpl_vars['publication']->value->getData('copyrightYear'),'copyrightHolder'=>$_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('copyrightHolder')),$_smarty_tpl ) ) ));?>

			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('licenseUrl') ));?>

		</dc:rights>
		<cc:license <?php if (($_smarty_tpl->tpl_vars['openAccess']->value === null || $_smarty_tpl->tpl_vars['openAccess']->value === $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus')) && $_smarty_tpl->tpl_vars['publication']->value->isCCLicense()) {?>rdf:resource="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('licenseUrl') ));?>
"<?php }?> />

		<dc:date><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),"Y-m-d" ));?>
</dc:date>
		<prism:publicationDate><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),"Y-m-d" ));?>
</prism:publicationDate>

		<?php if ($_smarty_tpl->tpl_vars['publication']->value->getStartingPage()) {?>
			<prism:startingPage><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getStartingPage() ));?>
</prism:startingPage>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['publication']->value->getEndingPage()) {?>
			<prism:endingPage><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getEndingPage() ));?>
</prism:endingPage>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['publication']->value->getDoi()) {?>
			<prism:doi><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getDoi() ));?>
</prism:doi>
		<?php }?>
	</item>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</rdf:RDF>
<?php }
}
