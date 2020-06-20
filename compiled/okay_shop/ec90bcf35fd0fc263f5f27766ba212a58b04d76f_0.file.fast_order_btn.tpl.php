<?php
/* Smarty version 3.1.36, created on 2020-06-20 16:41:29
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\OkayCMS\FastOrder\design\html\fast_order_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee120977fde8_04558296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec90bcf35fd0fc263f5f27766ba212a58b04d76f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\OkayCMS\\FastOrder\\design\\html\\fast_order_btn.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee120977fde8_04558296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="fn_fast_order_button fast_order_button fa fa-rocket fn_is_stock <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock < 1 && !$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>hidden<?php }?>" href="#fast_order"
   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
" data-language="fast_order" data-name="<?php echo $_smarty_tpl->tpl_vars['fast_order_product_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
</a><?php }
}
