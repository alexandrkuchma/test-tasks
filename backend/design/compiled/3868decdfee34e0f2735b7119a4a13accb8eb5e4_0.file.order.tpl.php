<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:47:00
  from 'C:\OSPanel\domains\test-tasks\backend\design\html\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee2164f0fa94_02632789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3868decdfee34e0f2735b7119a4a13accb8eb5e4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\backend\\design\\html\\order.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tinymce_init.tpl' => 1,
    'file:svg_icon.tpl' => 17,
    'file:labels_ajax.tpl' => 1,
    'file:order_history.tpl' => 1,
    'file:match_orders.tpl' => 1,
    'file:learning_hints.tpl' => 1,
  ),
),false)) {
function content_5eee2164f0fa94_02632789 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['order']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', ((string)$_smarty_tpl->tpl_vars['btr']->value->general_order_number)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id) ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->order_new ,false ,32);
}?>

<?php $_smarty_tpl->_subTemplateRender('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>

    <div class="main_header">
        <div class="main_header__item">
            <div class="fn_step-1 main_header__inner order_toolbar">
                <div class="box_heading heading_page order_toolbar__heading">
                    <?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_order_number, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_new, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
                                <div class="order_toolbar__status">
                    <select class="selectpicker form-control" name="status_id">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_status']->value, 'status_item');
$_smarty_tpl->tpl_vars['status_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_item']->value) {
$_smarty_tpl->tpl_vars['status_item']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['status_item']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value->status_id == $_smarty_tpl->tpl_vars['status_item']->value->id) {?>selected=""<?php }?> <?php if ($_smarty_tpl->tpl_vars['hasVariantNotInStock']->value && !$_smarty_tpl->tpl_vars['order']->value->closed && $_smarty_tpl->tpl_vars['status_item']->value->is_close) {?> disabled<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->id && !empty($_smarty_tpl->tpl_vars['order']->value->url)) {?>
                    <a data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_open, ENT_QUOTES, 'UTF-8', true);?>
" class="hint-bottom-middle-t-info-s-small-mobile  hint-anim ml-h site_block_icon" target="_blank"  href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'order','url'=>$_smarty_tpl->tpl_vars['order']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
" >
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'eye'), 0, false);
?>
                    </a>
                <?php }?>
                <a data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_print, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('view'=>'print','id'=>$_smarty_tpl->tpl_vars['order']->value->id,'return'=>null),$_smarty_tpl ) );?>
" target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_print, ENT_QUOTES, 'UTF-8', true);?>
" class="hint-bottom-middle-t-info-s-small-mobile  hint-anim ml-h print_block_icon">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'print'), 0, true);
?>
                </a>
                                <div class="box_btn_heading ml-h hidden-xs-down order_toolbar__markers">
                    <div class="add_order_marker form-control">
                        <span class="fn_ajax_label_wrapper">
                            <span class="fn_labels_show box_labels_show box_btn_heading ml-h"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag'), 0, true);
?> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select_label, ENT_QUOTES, 'UTF-8', true);?>
</span> </span>

                            <div class='fn_labels_hide box_labels_hide'>
                                <span class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_choose, ENT_QUOTES, 'UTF-8', true);?>
 <i class="fn_delete_labels_hide btn_close delete_labels_hide"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?></i></span>
                                <ul class="option_labels_box">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labels']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                                        <li class="fn_ajax_labels" data-order_id="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"  style="background-color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->color, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <input id="l<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" type="checkbox" class="hidden_check_1" name="order_labels[]"  value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['l']->value->id,array_keys($_smarty_tpl->tpl_vars['order_labels']->value)) && is_array($_smarty_tpl->tpl_vars['order_labels']->value)) {?>checked=""<?php }?> />
                                            <label   for="l<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" class="label_labels"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></label>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                            <div class="fn_order_labels orders_labels box_btn_heading ml-h">
                                <?php $_smarty_tpl->_subTemplateRender("file:labels_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </span>
                    </div>
                </div>

            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['neighbors_orders']->value) {?>
            <div class="main_header__item neighbors_orders hidden-md-down">
                <div class="main_header__inner">
                <?php if ($_smarty_tpl->tpl_vars['neighbors_orders']->value['prev']->id) {?>
                    <span>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->order_prev;?>
" class="prev_order ml-h" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('id'=>$_smarty_tpl->tpl_vars['neighbors_orders']->value['prev']->id),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'prev'), 0, true);
?>
                        </a>
                    </span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['neighbors_orders']->value['next']) {?>
                    <span>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->order_next;?>
" class="next_order ml-h" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('id'=>$_smarty_tpl->tpl_vars['neighbors_orders']->value['next']->id),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'next'), 0, true);
?>
                        </a>
                    </span>
                <?php }?>
                </div>
            </div>
        <?php }?>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['hasVariantNotInStock']->value && !$_smarty_tpl->tpl_vars['order']->value->closed) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_warning">
                    <div class="">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_in_stock, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                </div>
            </div>
        </div>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="alert alert--center alert--icon alert--error">
                    <div class="alert__content">
                        <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'error_closing') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_shortage, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_purchase') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_empty_purchases, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="alert alert--center alert--icon alert--success">
                    <div class="alert__content">
                        <div class="alert__title">
                            <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_updated, ENT_QUOTES, 'UTF-8', true);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_added, ENT_QUOTES, 'UTF-8', true);?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

                            <?php }?>
                        </div>
                    </div>
                    <?php if ($_GET['return']) {?>
                        <a class="alert__button" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, true);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php }?>

    <div class="row">
                <div class="col-xl-8 break_1300_12  pr-0">
            <div class="boxed fn_toggle_wrap min_height_230px fn_step-2 tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="heading_box tab_navigation_link">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_content, ENT_QUOTES, 'UTF-8', true);?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?>
                            <a href="#tab2" class="heading_box tab_navigation_link">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_history, ENT_QUOTES, 'UTF-8', true);?>

                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['match_orders']->value) {?>
                            <a href="#tab3" class="fn_match_orders_tab_title heading_box tab_navigation_link <?php if ($_smarty_tpl->tpl_vars['match_orders_tab_active']->value) {?>selected<?php }?>">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_match_orders, ENT_QUOTES, 'UTF-8', true);?>

                            </a>
                            <?php }?>
                        <?php }?>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <div id="fn_purchase" class="okay_list">
                                                                <div class="okay_list_head">
                                    <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="okay_list_heading okay_list_order_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_name_option, ENT_QUOTES, 'UTF-8', true);?>
 </div>
                                    <div class="okay_list_heading okay_list_price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="okay_list_heading okay_list_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_qty, ENT_QUOTES, 'UTF-8', true);?>

                                    </div>
                                    <div class="okay_list_heading okay_list_order_amount_price"><?php echo $_smarty_tpl->tpl_vars['btr']->value->general_sales_amount;?>
</div>
                                </div>
                                                                <div class="okay_list_body">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchases']->value, 'purchase');
$_smarty_tpl->tpl_vars['purchase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->do_else = false;
?>
                                        <div class="fn_row okay_list_body_item purchases">
                                            <div class="okay_list_row">
                                                <input type=hidden name=purchases[id][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
] value='<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
'>
    
                                                <div class="okay_list_boding okay_list_photo">
                                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant) {?>
                                                        <img class=product_icon src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,50,50 ));?>
">
                                                    <?php } else { ?>
                                                        <img width="50" src="design/images/no_image.png"/>
                                                    <?php }?>
                                                </div>
                                                <div class="okay_list_boding okay_list_order_name">
                                                    <div class="boxes_inline">
                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product) {?>
                                                            <a class="<?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock == 0) {?>hint-bottom-middle-t-info-s-small-mobile  hint-anim text_warning<?php }?>" <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock == 0) {?>data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_out_stock, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['purchase']->value->product->id),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant_name) {?>
                                                                <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_option, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->sku) {?>
                                                                <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['purchase']->value->sku)===null||$tmp==='' ? "&mdash;" : $tmp);?>
</span>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant_name) {?>
                                                                <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_option, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->sku) {?>
                                                                <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);
echo (($tmp = @$_smarty_tpl->tpl_vars['purchase']->value->sku)===null||$tmp==='' ? "&mdash;" : $tmp);?>
</div>
                                                            <?php }?>
                                                        <?php }?>
                                                        <div class="hidden-lg-up mt-q">
                                                            <span class="text_primary text_600"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->price;?>
</span>
                                                            <span class="hidden-md-up text_500">
                                                            <?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);
}?></span>
                                                        </div>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_purchase_name",'vars'=>array('purchase'=>$_smarty_tpl->tpl_vars['purchase']->value)),$_smarty_tpl ) );?>

                                                    </div>
    
                                                    <?php if (!$_smarty_tpl->tpl_vars['purchase']->value->variant) {?>
                                                        <input class="form-control " type="hidden" name="purchases[variant_id][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" value="" />
                                                    <?php } else { ?>
                                                        <div class="boxes_inline">
                                                            <select name="purchases[variant_id][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" class="selectpicker form-control <?php if (count($_smarty_tpl->tpl_vars['purchase']->value->product->variants) == 1) {?>hidden<?php }?> fn_purchase_variant">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase']->value->product->variants, 'v');
$_smarty_tpl->tpl_vars['v']->iteration = 0;
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
$_smarty_tpl->tpl_vars['v']->iteration++;
$__foreach_v_3_saved = $_smarty_tpl->tpl_vars['v'];
?>
                                                                    <option data-price="<?php echo $_smarty_tpl->tpl_vars['v']->value->price;?>
" data-units="<?php if ($_smarty_tpl->tpl_vars['v']->value->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);
}?>" data-amount="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value->id == $_smarty_tpl->tpl_vars['purchase']->value->variant_id) {?>selected<?php }?> >
                                                                        <?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?>
                                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                                                        <?php } else { ?>
                                                                            #<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>

                                                                        <?php }?>
                                                                    </option>
                                                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                <div class="okay_list_boding okay_list_price">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control fn_purchase_price" name="purchases[price][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->price;?>
">
                                                        <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->code;?>
</span>
                                                    </div>
                                                </div>
                                                <div class="okay_list_boding okay_list_count">
                                                    <div class="input-group">
                                                        <input class="form-control fn_purchase_amount" type="text" name="purchases[amount][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
"/>
                                                        <span class="input-group-addon p-0 fn_purchase_units">
                                                             <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);
}?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="okay_list_boding okay_list_order_amount_price">
                                                    <div class="text_dark">
                                                        <span><?php echo ($_smarty_tpl->tpl_vars['purchase']->value->price)*($_smarty_tpl->tpl_vars['purchase']->value->amount);?>
</span>
                                                        <span class=""><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                                                    </div>
                                                </div>
                                                <div class="okay_list_boding okay_list_close">
                                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim" >
                                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="okay_list_body fn_new_purchase" style="display: none">
                                    <div class="fn_row okay_list_body_item " >
                                    <div class="okay_list_row">
    
                                        <div class="okay_list_boding okay_list_photo">
                                            <input type="hidden" name="purchases[id][]" value="" />
                                            <img class="fn_new_image" src="">
                                        </div>
    
                                        <div class="okay_list_boding okay_list_order_name">
                                            <div class="boxes_inline">
                                                <a class="fn_new_product" href=""></a>
                                                <div class="fn_new_variant_name"></div>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_new_purchase_name"),$_smarty_tpl ) );?>

                                            </div>
                                            <div class="boxes_inline">
                                                <select name="purchases[variant_id][]" class="fn_new_variant"></select>
                                            </div>
    
                                        </div>
                                        <div class="okay_list_boding okay_list_price">
                                            <div class="input-group">
                                                <input type="text" class="form-control fn_purchase_price" name=purchases[price][] value="">
                                                <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_count">
                                            <div class="input-group">
                                                <input class="form-control fn_purchase_amount" type="text" name="purchases[amount][]" value="1"/>
                                                <span class="input-group-addon p-0 fn_purchase_units">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_order_amount_price">
                                            <div class="text_dark">
                                                <span></span>
                                                <span class=""></span>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
    
                            <div class="row mt-2 mb-1">
                                <div class="col-lg-6 col-md-12">
                                    <div class="autocomplete_arrow">
                                        <input type="text" name="new_purchase" id="fn_add_purchase" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_product, ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <?php if ($_smarty_tpl->tpl_vars['purchases']->value) {?>
                                    <div class="order_prices__total text-xs-right">
                                        <span class="text_grey text_500 font_16 mr-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_sum, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <span class="text_dark text_600 font_24"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</span>
                                        <span class="text_dark text_400 font_18 ml-q"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_purchases"),$_smarty_tpl ) );?>

                        </div>
                        
                        <?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?>
                            <div id="tab2" class="tab">
                                <?php $_smarty_tpl->_subTemplateRender('file:order_history.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <div class="mt-2">
                                    <textarea name="history_comment" class="editor_small"></textarea>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 mt-1">
                                            <button type="submit" class="btn btn_small btn_blue float-sm-right">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['match_orders']->value) {?>
                            <div id="tab3" class="tab fn_match_order_container">
                                <?php $_smarty_tpl->_subTemplateRender('file:match_orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                            <?php }?>
                        <?php }?>
                    </div>
                </div>
            </div>

                        <div class="boxed fn_toggle_wrap min_height_230px fn_step-3">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_parameters, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="">
                        <div class="">
                            <div class="okay_list">
                                <div class="okay_list_body">
                                    <div class="okay_list_body_item">
                                        <div class="okay_list_row  d_flex">
                                            <div class="okay_list_boding okay_list_ordfig_name">
                                                <div class="text_600 text_dark"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_discount, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_val">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="discount" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
">
                                                    <span class="input-group-addon p-0"><i class="fa fa-percent"></i></span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_price">
                                                <div class="text_dark">
                                                    <span><?php echo round(($_smarty_tpl->tpl_vars['subtotal']->value-$_smarty_tpl->tpl_vars['subtotal']->value*$_smarty_tpl->tpl_vars['order']->value->discount/100),2);?>
</span>
                                                    <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="okay_list_body_item">
                                        <div class="okay_list_row d_flex">
                                            <div class="okay_list_boding okay_list_ordfig_name">
                                                <div class="text_600 text_dark"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_coupon, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['order']->value->coupon_code) {?> (<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>
)<?php }?></div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_val">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="coupon_discount" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
" />
                                                    <span class="input-group-addon p-0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_price">
                                                <div class="text_dark">
                                                    <span><?php echo round(($_smarty_tpl->tpl_vars['subtotal']->value-$_smarty_tpl->tpl_vars['subtotal']->value*$_smarty_tpl->tpl_vars['order']->value->discount/100-$_smarty_tpl->tpl_vars['order']->value->coupon_discount),2);?>
</span>
                                                    <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="okay_list_body_item">
                                        <div class="okay_list_row  d_flex">
                                            <div class="okay_list_boding okay_list_ordfig_name">
                                                <div class="text_600 text_dark boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_shipping, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <div class="boxes_inline">
                                                    <select name="delivery_id" class="selectpicker form-control">
                                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_selected, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deliveries']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value->id == $_smarty_tpl->tpl_vars['delivery']->value->id) {?>selected<?php }?> data-module_id="<?php echo $_smarty_tpl->tpl_vars['d']->value->module_id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_delivery_info"),$_smarty_tpl ) );?>

                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_val">
                                                <div class="input-group">
                                                    <input type=text name=delivery_price class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['order']->value->delivery_price;?>
'>
                                                    <span class="input-group-addon p-0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_price">
                                                <div class="input-group"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="okay_list_body_item">
                                        <div class="okay_list_row  d_flex">
                                            <div class="okay_list_boding okay_list_ordfig_name">
                                                <div class="text_600 text_dark boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_payment_selected, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <div class="boxes_inline">
                                                    <select name="payment_method_id" class="selectpicker form-control">
                                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_selected, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'pm');
$_smarty_tpl->tpl_vars['pm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['pm']->value->id == $_smarty_tpl->tpl_vars['payment_method']->value->id) {?>selected<?php }?> data-module_id="<?php echo $_smarty_tpl->tpl_vars['pm']->value->module_id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pm']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_payment_info"),$_smarty_tpl ) );?>

                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_val"></div>
                                            <div class="okay_list_boding okay_list_ordfig_price">
                                                <div class="text_dark">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
 </span>
                                                    <span class=""><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_common_info"),$_smarty_tpl ) );?>

                            </div>
                            <div class="order_prices mt-1">
                                <div class="order_prices__item my-1">
                                    <div class="">
                                        <div class="okay_switch">
                                            <label class="switch_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_paid, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                            <label class="switch switch-default switch-pill switch-primary-outline-alt boxes_inline">
                                                <input class="switch-input" name="paid" value='1' type="checkbox" id="paid" <?php if ($_smarty_tpl->tpl_vars['order']->value->paid) {?>checked<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_prices__item my-1">
                                    <div class="">
                                        <?php if ($_smarty_tpl->tpl_vars['payment_method']->value) {?>
                                            <div class="order_prices__total">
                                                <span class="text_grey text_500 font_18 mr-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_to_pay, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <span class="text_dark text_600 font_26"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['payment_currency']->value->id ));?>
</span>
                                                <span class="text_dark text_400 font_18 ml-q"><?php echo $_smarty_tpl->tpl_vars['payment_currency']->value->sign;?>
</span>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
                <div class="boxed fn_toggle_wrap">
                    <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

                </div>
            <?php }?>
        </div>
                        <div class="col-xl-4 break_1300_12">
            <div class="boxed fn_toggle_wrap min_height_230px fn_step-4">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_buyer_information, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="box_border_buyer">
                        <div class="mb-1">
                            <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="boxes_inline text_dark text_600"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
</div>
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <input name="name" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_phone, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <input name="phone" class="form-control" type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'phone' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->phone ));?>
" />
                        </div>
                        <div class="mb-1">
                            <div class="heading_label">E-mail</div>
                            <input name="email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_adress, ENT_QUOTES, 'UTF-8', true);?>
 <a href="https://www.google.com/maps/search/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
?hl=ru" target="_blank"><i class="fa fa-map-marker"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_on_map, ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                            <textarea name="address" class="form-control short_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_comment, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <textarea name="comment" class="form-control short_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                         <div class="mb-1">
                            <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_ip, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?><a href="https://who.is/whois-ip/ip-address/<?php echo $_smarty_tpl->tpl_vars['order']->value->ip;?>
" target="_blank"><i class="fa fa-map-marker"></i> whois</a><?php }?></div>
                            <div class="boxes_inline text_dark text_600"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->ip, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['order']->value->referer_channel) {?>
                            <div class="mb-1">
                                <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_referer_channel, ENT_QUOTES, 'UTF-8', true);?>
:</div>
                                <div class="boxes_inline text_dark">
                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_EMAIL) {?>
                                        <span class="tag tag-chanel_email" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->referer_source, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_email'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                                        </span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_SEARCH) {?>
                                        <span class="tag tag-chanel_search" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->referer_source, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_search'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                                        </span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_SOCIAL) {?>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->referer_source, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="tag tag-chanel_social" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->referer_source, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_social'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                                        </a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_REFERRAL) {?>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->referer_source, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="tag tag-chanel_referral" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->referer_source, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_referral'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                                        </a>
                                    <?php } else { ?>
                                        <span class="tag tag-chanel_unknown" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->referer_source, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_unknown'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                                        </span>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_contact"),$_smarty_tpl ) );?>

                    </div>
                    <div class="box_border_buyer">
                        <div class="mb-1">
                            <div style="position:relative;">
                                <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
                                    <div class="heading_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_buyer_not_registred, ENT_QUOTES, 'UTF-8', true);?>

                                    </div>
                                    <div style="position:relative;">
                                        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />

                                        <input type="text" class="fn_user_complite form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_user_select, ENT_QUOTES, 'UTF-8', true);?>
" />
                                    </div>
                                <?php } else { ?>
                                    <div class="fn_user_row">
                                        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />
                                        <div class="heading_label boxes_inline">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_buyer, ENT_QUOTES, 'UTF-8', true);?>

                                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'UserAdmin','id'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl ) );?>
" target=_blank>
                                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </div>
                                        <a href="javascript:;" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_delete, ENT_QUOTES, 'UTF-8', true);?>
" class="btn_close delete_grey fn_delete_user hint-bottom-right-t-info-s-small-mobile  hint-anim boxes_inline" >
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->group_id > 0) {?>
                                            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->group->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <?php } else { ?>
                                            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_in_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_user_info"),$_smarty_tpl ) );?>

                    </div>
                    <div class="box_border_buyer">
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_language, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <select name="entity_lang_id" class="selectpicker form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['l']->value->id == $_smarty_tpl->tpl_vars['order']->value->lang_id) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_note, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <textarea name="note" class="form-control short_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->note, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_additional_info"),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-2">
            <button type="submit" class="btn btn_small btn_blue float-sm-right">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>
            <div class="checkbox_email float-sm-right text_dark mr-1 fn_step-5">
                <input id="order_to_email" name="notify_user" type="checkbox" class="hidden_check_1"  value="1" />
                <label for="order_to_email" class="checkbox_label mr-h"></label>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_email, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
        </div>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:learning_hints.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hintId'=>'hint_order'), 0, false);
?>

<?php echo '<script'; ?>
 src="design/js/autocomplete/jquery.autocomplete-min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="design/js/autocomplete/styles.css" media="screen" />

<?php echo '<script'; ?>
>
$(function() {
    // Удаление товара
    $(document).on( "click", "#fn_purchase .fn_remove_item", function() {
         $(this).closest(".fn_row").fadeOut(200, function() { $(this).remove(); });
         return false;
    });

    $(".fn_labels_show").click(function(){
        $(this).next('.fn_labels_hide').toggleClass("active_labels");
    });
    $(".fn_delete_labels_hide").click(function(){
        $(this).closest('.box_labels_hide').removeClass("active_labels");
    });

    $(".fn_from_date, .fn_to_date ").datepicker({
        dateFormat: 'dd-mm-yy'
    });

    $(document).on("change", ".fn_ajax_labels input", function () {
        elem = $(this);
       var order_id = parseInt($(this).closest(".fn_ajax_labels").data("order_id"));
       var state = "";
       session_id = '<?php echo $_SESSION['id'];?>
';
       var label_id = parseInt($(this).closest(".fn_ajax_labels").find("input").val());
       if($(this).closest(".fn_ajax_labels").find("input").is(":checked")){
            state = "add";
       } else {
            state = "remove";
       }

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "ajax/update_order.php",
            data: {
                order_id : order_id,
                state : state,
                label_id : label_id,
                session_id : session_id
            },
            success: function(data){
                var msg = "";
                if(data){
                    elem.closest(".fn_ajax_label_wrapper").find(".fn_order_labels").html(data.data);
                    toastr.success(msg, "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->toastr_success, ENT_QUOTES, 'UTF-8', true);?>
");
                } else {
                    toastr.error(msg, "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->toastr_error, ENT_QUOTES, 'UTF-8', true);?>
");

                }
            }
        });
    });
    
    // Добавление товара
    var new_purchase = $('#fn_purchase .fn_new_purchase').clone(true);
    $('#fn_purchase .fn_new_purchase').remove().removeAttr('class');

    $("#fn_add_purchase").devbridgeAutocomplete({
    serviceUrl:'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'OrderAdmin@addOrderProduct'),$_smarty_tpl ) );?>
',
    minChars:0,
    orientation:'auto',
    noCache: false,
    onSelect:
        function(suggestion){
            new_item = new_purchase.clone().appendTo('#fn_purchase');
            new_item.removeAttr('id');
            new_item.find('.fn_new_product').html(suggestion.data.name);
            new_item.find('.fn_new_product').attr('href', 'index.php?controller=ProductAdmin&id='+suggestion.data.id);

            // Добавляем варианты нового товара
            var variants_select = new_item.find("select.fn_new_variant");

            for(var i in suggestion.data.variants) {
                variants_select.append("<option <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_new_purchase_variants_option_block"),$_smarty_tpl ) );?>
 " +
                    "value='"+suggestion.data.variants[i].id+"' " +
                    "data-price='"+suggestion.data.variants[i].price+"' " +
                    "data-amount='"+suggestion.data.variants[i].stock+"' " +
                    "data-units='"+suggestion.data.variants[i].units+"'>" +
                    suggestion.data.variants[i].name +
                    "</option>");
            }

            if(suggestion.data.variants.length> 1 || suggestion.data.variants[0].name != '') {
                variants_select.show();
                variants_select.selectpicker();
            } else {
                variants_select.hide();
            }
            variants_select.find('option:first').attr('selected',true);

            variants_select.bind('change', function(){
                change_variant(variants_select);
            });
            change_variant(variants_select);
            variants_select.trigger('change');

            if(suggestion.data.image) {
                new_item.find('.fn_new_image').attr("src", suggestion.data.image);
            } else {
                new_item.find('.fn_new_image').remove();
            }

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_new_purchase_js_block"),$_smarty_tpl ) );?>

            
            $("input#fn_add_purchase").val('').focus().blur();
            new_item.show();
        },
        formatResult:
            function(suggestions, currentValue){
                    var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                    var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                    return "<div>" + (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + "</div>" +  "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                }


  });

  // Изменение цены и макс количества при изменении варианта
    function change_variant(element) {
        var price = element.find('option:selected').data('price');
        var amount = element.find('option:selected').data('amount');
        var units = element.find('option:selected').data('units');
        element.closest('.fn_row').find('input.fn_purchase_price').val(price);
        element.closest('.fn_row').find('.fn_purchase_units').text(units);
        var amount_input = element.closest('.fn_row').find('input.fn_purchase_amount');
        amount_input.val('1');
        amount_input.data('max',amount);
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_change_variant_js_block"),$_smarty_tpl ) );?>

        return false;
  }

    $(".fn_user_complite").devbridgeAutocomplete({
        serviceUrl:'ajax/search_users.php',
        minChars:0,
        orientation:'auto',
        noCache: false,
        onSelect:
            function(suggestion){
                $('input[name="user_id"]').val(suggestion.data.id);
            },
            formatResult:
                function(suggestions, currentValue){
                        var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                        var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                        return "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                    }
    });

    $(document).on("click", ".fn_delete_user", function () {
        $(this).closest(".fn_user_row").hide();
        $('input[name="user_id"]').val(0);
    });


    $("select.fn_purchase_variant").bind("change", function(){
        change_variant($(this));
    });

});

<?php echo '</script'; ?>
>

<?php }
}
