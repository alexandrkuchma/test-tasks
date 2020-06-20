<?php
/* Smarty version 3.1.36, created on 2020-06-20 18:16:27
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\SimplaMarket\OrdersAmount\Backend\design\html\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee284b020916_33397264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4f47ebda31d87372e1f974f21c120e5713f0242' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\SimplaMarket\\OrdersAmount\\Backend\\design\\html\\description.tpl',
      1 => 1592666179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee284b020916_33397264 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo $_smarty_tpl->tpl_vars['btr']->value->sm_orders_amount_title;?>

            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 float-xs-right"></div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="boxed">
            <div class="row d_flex">
                <div class="col-lg-12 col-md-12">
                    <p><?php echo $_smarty_tpl->tpl_vars['btr']->value->sm_orders_amount_description;?>
</p>
                    <br>
                    <b><?php echo $_smarty_tpl->tpl_vars['btr']->value->sm_orders_amount_install;?>
</b>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
