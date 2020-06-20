<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:45:51
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\OkayCMS\NovaposhtaCost\design\html\front_cart_delivery_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee211f17dfa1_18487765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49b48e9788b092c65d8f0bb7bae5ee23ebb550c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\OkayCMS\\NovaposhtaCost\\design\\html\\front_cart_delivery_block.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee211f17dfa1_18487765 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['delivery']->value->module_id == $_smarty_tpl->tpl_vars['np_delivery_module_id']->value) {?>
    <div class="m-l-2 novaposhta_div fn_delivery_novaposhta">
        <div class="np_preloader"></div>
        
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 100px;"><span class="labelcity_novaposhta"><?php echo $_smarty_tpl->tpl_vars['lang']->value->np_cart_city;?>
 </span></label>
            <input class="city_novaposhta form__input form__placeholder--focus" name="novaposhta_city" autocomplete="off" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['novaposhta_city'], ENT_QUOTES, 'UTF-8', true);?>
" >
        </div>
        <?php if ($_smarty_tpl->tpl_vars['np_redelivery_payments_ids']->value) {?>
        <div style="padding: 5px 0;">
            <label for="redelivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->np_cart_cod;?>
 </label>
            <input name="novaposhta_redelivery" id="redelivery" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['request_data']->value['novaposhta_redelivery'] == true) {?>checked<?php }?> />
        </div>
        <?php }?>
        <div class="warehouses_novaposhta">
            <label class="" style="display: inline-block; width: 100px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->np_cart_warehouse;?>
</label>
            <select name="novaposhta_warehouses" tabindex="1" class="fn_select_warehouses_novaposhta" style="width: 100%;"></select>
        </div>
    
        <div class="term_novaposhta"><?php echo $_smarty_tpl->tpl_vars['lang']->value->np_cart_term;?>
 <span></span></div>
    
        <input name="is_novaposhta_delivery" type="hidden" value="1"/>
        <input name="novaposhta_delivery_price" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request_data']->value['novaposhta_delivery_price'];?>
"/>
        <input name="novaposhta_delivery_term" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request_data']->value['novaposhta_delivery_term'];?>
"/>
        <input name="novaposhta_delivery_city_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request_data']->value['novaposhta_delivery_city_id'];?>
"/>
        <input name="novaposhta_delivery_warehouse_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['request_data']->value['novaposhta_delivery_warehouse_id'];?>
"/>
    </div>
<?php }
}
}
