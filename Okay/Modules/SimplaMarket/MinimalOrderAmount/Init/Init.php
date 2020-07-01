<?php

namespace Okay\Modules\SimplaMarket\MinimalOrderAmount\Init;

use Okay\Admin\Helpers\BackendSettingsHelper;
use Okay\Core\Modules\AbstractInit;
use Okay\Modules\SimplaMarket\MinimalOrderAmount\Extenders\BackendExtender;
use Okay\Modules\SimplaMarket\MinimalOrderAmount\Extenders\FrontExtender;
use Okay\Helpers\ValidateHelper;

class Init extends AbstractInit {

    public function install(){

        $this->setBackendMainController('DescriptionAdmin');
    }

    public function init(){
        $this->registerBackendController('DescriptionAdmin');
        $this->addBackendControllerPermission('DescriptionAdmin', 'settings_catalog');

        $this->addBackendBlock('settings_catalog_custom_block', 'min_order_input.tpl');
        
        $this->registerChainExtension(
            [BackendSettingsHelper::class, 'updateSettings'],
            [BackendExtender::class, 'saveMinOrderAmount']);

        $this->registerChainExtension(
            [ValidateHelper::class, 'getCartValidateError'],
            [FrontExtender::class, 'getCartValidateError']);
    

    }

    
}