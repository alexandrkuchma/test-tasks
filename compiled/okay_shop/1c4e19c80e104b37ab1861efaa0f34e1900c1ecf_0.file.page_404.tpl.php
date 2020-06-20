<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:24:22
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\page_404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee1c1618ded5_06835969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c4e19c80e104b37ab1861efaa0f34e1900c1ecf' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_5eee1c1618ded5_06835969 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="block">
    <div class="container">
        <div class="not_found">
            <div class="not_found__image">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"404_icon"), 0, false);
?>
            </div>
            <div class="not_found__description">
                <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

            </div>
            <div class="not_found__menu">
                <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

            </div>
        </div>
    </div>
</div><?php }
}
