<div class="fn_step-11 boxed fn_toggle_wrap ">
    <div class="heading_box">
        {$btr->sm_min_orders_amount_title|escape} ({$currency->sign})
    </div>
    <div class="toggle_body_wrap on fn_card row">
        <div class="col-lg-6 col-md-6">
            <input name="min_order_input" class="form-control fn_meta_field mb-h" type="text" value="{$settings->min_order_amount}" />
        </div>
    </div>
</div>
