<?php
/* Smarty version 3.1.36, created on 2020-06-03 21:24:02
  from '/home/anthony/Workspace/Work/Alona/design/okay_shop/html/comparison_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed7eac23363e8_47864091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4d1e75778fe2a10804e330bd6d2351aa0ad8be5' => 
    array (
      0 => '/home/anthony/Workspace/Work/Alona/design/okay_shop/html/comparison_informer.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed7eac23363e8_47864091 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['comparison']->value->products) > 0) {?>
    <a class="header_informers__link d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"comparison"),$_smarty_tpl ) );?>
">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
                <span class="compare_counter"><?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
            </div>
<?php }
}
}
