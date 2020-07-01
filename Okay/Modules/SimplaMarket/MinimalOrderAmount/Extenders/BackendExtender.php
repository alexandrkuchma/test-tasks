<?php

namespace Okay\Modules\SimplaMarket\MinimalOrderAmount\Extenders;

use Okay\Core\Modules\Extender\ExtensionInterface;
use Okay\Core\Settings;
use Okay\Core\Request;

class BackendExtender implements ExtensionInterface {
    protected $settings;
    protected $request;

    public function __construct(Request $request, Settings $settings) 
    {
        $this->request = $request;
        $this->settings = $settings;
    }

    public function saveMinOrderAmount(){
        $minOrderAmount = $this->request->post('min_order_input');
        $minOrderAmount = str_replace(',','.',$minOrderAmount);
        $this->settings->set('min_order_amount', $minOrderAmount);
    }
}
