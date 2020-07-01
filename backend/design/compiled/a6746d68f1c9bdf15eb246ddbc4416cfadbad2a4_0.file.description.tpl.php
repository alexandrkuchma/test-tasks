<?php
/* Smarty version 3.1.36, created on 2020-06-29 20:35:04
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\SimplaMarket\MinOrderAmount\Backend\design\html\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efa264888f355_40890973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6746d68f1c9bdf15eb246ddbc4416cfadbad2a4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\SimplaMarket\\MinOrderAmount\\Backend\\design\\html\\description.tpl',
      1 => 1593451005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa264888f355_40890973 (Smarty_Internal_Template $_smarty_tpl) {
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
