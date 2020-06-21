<?php

namespace Okay\Modules\SimplaMarket\WorkingHoursBanner\Init;

use Okay\Core\Modules\AbstractInit;

class Init extends AbstractInit {

    public function install(){

        $this->setBackendMainController('DescriptionAdmin');
    }

    public function init(){
        $this->registerBackendController('DescriptionAdmin');
        $this->addBackendControllerPermission('DescriptionAdmin', 'design');
    }
}