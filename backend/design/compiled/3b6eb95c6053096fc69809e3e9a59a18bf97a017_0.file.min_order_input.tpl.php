<?php
/* Smarty version 3.1.36, created on 2020-07-02 02:40:33
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\SimplaMarket\MinimalOrderAmount\Backend\design\html\min_order_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efd1ef1dffc02_83949576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b6eb95c6053096fc69809e3e9a59a18bf97a017' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\SimplaMarket\\MinimalOrderAmount\\Backend\\design\\html\\min_order_input.tpl',
      1 => 1593646822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efd1ef1dffc02_83949576 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="fn_step-11 boxed fn_toggle_wrap ">
    <div class="heading_box">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->sm_min_orders_amount_title, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
)
    </div>
    <div class="toggle_body_wrap on fn_card row">
        <div class="col-lg-6 col-md-6">
            <input name="min_order_input" class="form-control fn_meta_field mb-h" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value->min_order_amount;?>
" />
        </div>
    </div>
</div>
<?php }
}
