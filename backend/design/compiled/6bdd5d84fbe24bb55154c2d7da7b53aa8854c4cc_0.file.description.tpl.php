<?php
/* Smarty version 3.1.36, created on 2020-07-02 01:12:53
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\SimplaMarket\MinimalOrderAmount\Backend\design\html\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efd0a655b45b8_51464105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdd5d84fbe24bb55154c2d7da7b53aa8854c4cc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\SimplaMarket\\MinimalOrderAmount\\Backend\\design\\html\\description.tpl',
      1 => 1593641567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efd0a655b45b8_51464105 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo $_smarty_tpl->tpl_vars['btr']->value->sm_min_orders_amount_title;?>

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
                    <p><?php echo $_smarty_tpl->tpl_vars['btr']->value->sm_min_orders_amount_description;?>
</p>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
