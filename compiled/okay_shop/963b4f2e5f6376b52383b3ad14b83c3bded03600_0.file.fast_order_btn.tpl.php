<?php
/* Smarty version 3.1.36, created on 2020-06-03 21:24:01
  from '/home/anthony/Workspace/Work/Alona/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed7eac171eb56_75938536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963b4f2e5f6376b52383b3ad14b83c3bded03600' => 
    array (
      0 => '/home/anthony/Workspace/Work/Alona/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_btn.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed7eac171eb56_75938536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="fn_fast_order_button fast_order_button fa fa-rocket fn_is_stock <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock < 1 && !$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>hidden<?php }?>" href="#fast_order"
   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
" data-language="fast_order" data-name="<?php echo $_smarty_tpl->tpl_vars['fast_order_product_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
</a><?php }
}
