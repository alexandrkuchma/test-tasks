<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:47:03
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\OkayCMS\NovaposhtaCost\Backend\design\html\order_contact_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee21671ab634_08955092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3de9a415f5627fb58eec88613bc78d18650c2480' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\OkayCMS\\NovaposhtaCost\\Backend\\design\\html\\order_contact_block.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee21671ab634_08955092 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="fn_delivery_novaposhta"<?php if ($_smarty_tpl->tpl_vars['delivery']->value->module_id != $_smarty_tpl->tpl_vars['novaposhta_module_id']->value) {?> style="display: none;"<?php }?>>
    <input name="novaposhta_city_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->city_id, ENT_QUOTES, 'UTF-8', true);?>
" />
    <input name="novaposhta_warehouse_id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->warehouse_id, ENT_QUOTES, 'UTF-8', true);?>
" />
    <input name="novaposhta_delivery_term" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->delivery_term, ENT_QUOTES, 'UTF-8', true);?>
" />
    
    <div class="mb-1">
        <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_city;?>
</div>
        <input type="text" class="fn_newpost_city_name form-control" autocomplete="off" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'newpost_city' ][ 0 ], array( $_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->city_id ));?>
">
    </div>
    <div class="mb-1">
        <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_warehouse;?>
</div>
        <select name="novaposhta_warehouse" tabindex="1" class="selectpicker form-control warehouses_novaposhta"></select>
    </div>
    <div class="mb-1">
        <div class="heading_label">
            <input type="checkbox" id="novaposhta_redelivery" name="novaposhta_redelivery" value="1" <?php if ($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->redelivery) {?>checked<?php }?>/>
            <label for="novaposhta_redelivery"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_redelivery;?>
</label>
        </div>
        
    </div>
    <div class="mb-1">
        <div class="heading_label">
            <span class="fn_np_term"<?php if (!$_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->delivery_term) {?> style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_term;?>
: <span><?php echo $_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->delivery_term;?>
</span></span>
            <a href="#" class="fn_np_recalc_price"><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_np_calc;?>
</a>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 src="design/js/autocomplete/jquery.autocomplete-min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    toastr.options = {
        closeButton: true,
        newestOnTop: true,
        progressBar: true,
        positionClass: 'toast-top-right',
        preventDuplicates: false,
        onclick: null
    };
    
    $('.fn_np_recalc_price').on('click', function(e) {
        e.preventDefault();
        let selected_city = $('input[name="novaposhta_city_id"]').val();
        let warehouse_ref = $('input[name="novaposhta_warehouse_id"]').val();
        let delivery_id = $('select[name="delivery_id"]').children(':selected').val();
        let redelivery = $('input[name="novaposhta_redelivery"]').is(':checked') ? 1 : 0;
        $.ajax({
            url: okay.router['OkayCMS_NovaposhtaCost_calc'],
            data: {
                city: selected_city,
                redelivery: redelivery,
                warehouse: warehouse_ref,
                delivery_id: delivery_id,
                currency: '<?php echo $_smarty_tpl->tpl_vars['currency']->value->id;?>
',
                order_id: '<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
'
            },
            dataType: 'json',
            success: function(data) {
                
                if (data.price_response.success) {
                    toastr.success('', "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->toastr_success, ENT_QUOTES, 'UTF-8', true);?>
");
                    $('input[name="delivery_price"]').val(data.price_response.price);
                }

                if (data.term_response.success) {
                    $('input[name="novaposhta_delivery_term"]').val(data.term_response.term);
                    $('.fn_np_term').show().children('span').text(data.term_response.term);
                } else {
                    $('.fn_np_term').parent().hide();
                }
            }
        });
    });
    
    $('select[name="delivery_id"]').on('change', function () {
        if ($(this).children(':selected').data('module_id') == '<?php echo $_smarty_tpl->tpl_vars['novaposhta_module_id']->value;?>
') {
            $('.fn_delivery_novaposhta').show();
        } else {
            $('.fn_delivery_novaposhta').hide();
        }
    });

    $( ".fn_newpost_city_name" ).devbridgeAutocomplete( {
        serviceUrl: okay.router['OkayCMS_NovaposhtaCost_find_city'],
        minChars: 1,
        maxHeight: 320,
        noCache: true,
        onSelect: function(suggestion) {
            $('input[name="novaposhta_city_id"]').val(suggestion.data.ref);
            showWarehouses(suggestion.data.ref);
        },
        formatResult: function(suggestion, currentValue) {
            var reEscape = new RegExp( '(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join( '|\\' ) + ')', 'g' );
            var pattern = '(' + currentValue.replace( reEscape, '\\$1' ) + ')';
            return "<span>" + suggestion.value.replace( new RegExp( pattern, 'gi' ), '<strong>$1<\/strong>' ) + "<\/span>";
        }
    } );
    
    
    <?php if (!empty($_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->city_id)) {?>
    showWarehouses('<?php echo $_smarty_tpl->tpl_vars['novaposhta_delivery_data']->value->city_id;?>
');
    <?php }?>
    
    
    function showWarehouses(cityRef) {
        let selected_warehouse = $('input[name="novaposhta_warehouse_id"]').val();
        $.ajax({
            url: okay.router['OkayCMS_NovaposhtaCost_get_warehouses'],
            data: {city: cityRef, warehouse: selected_warehouse},
            dataType: 'json',
            success: function(data) {
                if (data.warehouses_response.success) {
                    $('select.warehouses_novaposhta').html(data.warehouses_response.warehouses).show();
                    $('select.warehouses_novaposhta').selectpicker('refresh');
                } else {
                    $('select.warehouses_novaposhta').html('').hide();
                }
            }
        });
    }
    
    $('select.warehouses_novaposhta').on('change', function() {
        if($(this).val() != ''){
            let city_name = $('.fn_newpost_city_name').val(),
                warehouse_name = $(this).val(),
                delivery_address = city_name + ', ' + warehouse_name;
            $('textarea[name="address"]').text(delivery_address);
            $('input[name="novaposhta_warehouse_id"]').val($(this).children(':selected').data('warehouse_ref'));
            let new_href = 'https://www.google.com/maps/search/'+ delivery_address +'?hl=ru';
            $("a#google_map").attr("href", new_href);
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
