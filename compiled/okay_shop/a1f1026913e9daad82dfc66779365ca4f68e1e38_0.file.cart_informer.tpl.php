<?php
/* Smarty version 3.1.36, created on 2020-06-03 21:24:02
  from '/home/anthony/Workspace/Work/Alona/design/okay_shop/html/cart_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed7eac2354dc2_14098040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f1026913e9daad82dfc66779365ca4f68e1e38' => 
    array (
      0 => '/home/anthony/Workspace/Work/Alona/design/okay_shop/html/cart_informer.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed7eac2354dc2_14098040 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cart']->value->isEmpty === false) {?>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'cart'),$_smarty_tpl ) );?>
" class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </div>
<?php }
}
}
