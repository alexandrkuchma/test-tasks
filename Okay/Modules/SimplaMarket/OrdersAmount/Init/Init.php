<?php

namespace Okay\Modules\SimplaMarket\OrdersAmount\Init;

use Okay\Core\Modules\AbstractInit;
use Okay\Helpers\MainHelper;
use Okay\Modules\SimplaMarket\OrdersAmount\Extenders\FrontExtender;

class Init extends AbstractInit {

    public function install(){

        $this->setBackendMainController('DescriptionAdmin');
    }

    public function init(){
        $this->registerBackendController('DescriptionAdmin');
        $this->addBackendControllerPermission('DescriptionAdmin', 'orders');

        $this->registerChainExtension(
            [MainHelper::class, 'getCurrentUser'],
            [FrontExtender::class, 'showCompletedOrders']
        );
    }
}