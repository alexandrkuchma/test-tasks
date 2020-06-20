<?php
/* Smarty version 3.1.36, created on 2020-06-20 16:41:38
  from 'C:\OSPanel\domains\test-tasks\Okay\xml\opensearch.xml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee121276b037_05992516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dae522e73fc7eb7771b8105a0fb38cf7d64862f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\xml\\opensearch.xml.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee121276b037_05992516 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>
version="1.0" encoding="UTF-8"<?php echo '?>';?>

<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/" xmlns:moz="http://www.mozilla.org/2006/browser/search/">
    <ShortName>OkayCMS</ShortName>
    <Developer>OkayCMS <?php echo $_smarty_tpl->tpl_vars['config']->value->version;?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->version_type;?>
</Developer>
    <Description><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
</Description>
    <InputEncoding>UTF-8</InputEncoding>
    <?php if ((!empty($_smarty_tpl->tpl_vars['favicon_mime']->value))) {?>
        <Image type="<?php echo $_smarty_tpl->tpl_vars['favicon_mime']->value;?>
" width="16" height="16"><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/files/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_favicon;?>
</Image>
    <?php }?>

    <Url type="application/opensearchdescription+xml" rel="self" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"opensearch",'absolute'=>1),$_smarty_tpl ) );?>
" />
    <Url type="application/x-suggestions+json" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"opensearch_ajax",'absolute'=>1),$_smarty_tpl ) );?>
?query={searchTerms}" />
    <Url type="text/html" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"search",'absolute'=>1),$_smarty_tpl ) );?>
?keyword={searchTerms}" />
    <moz:SearchForm><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"search",'absolute'=>1),$_smarty_tpl ) );?>
</moz:SearchForm>
    <OutputEncoding>UTF-8</OutputEncoding>
    <InputEncoding>UTF-8</InputEncoding>
</OpenSearchDescription><?php }
}
