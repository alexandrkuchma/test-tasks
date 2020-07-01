<?php
/* Smarty version 3.1.36, created on 2020-07-02 02:35:05
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\SimplaMarket\MinimalOrderAmount\design\html\error_min_order_amount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efd1da9e47336_36226206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec118db03a9212a5b8956cdedb9629e61c3ad07c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\SimplaMarket\\MinimalOrderAmount\\design\\html\\error_min_order_amount.tpl',
      1 => 1593646497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efd1da9e47336_36226206 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value == 'min_order_amount') {?>
    <span data-language="error_min_order_amount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_min_order_amount;?>
</span>
<?php }
}
}
