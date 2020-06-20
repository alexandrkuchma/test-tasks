<?php

namespace Okay\Modules\SimplaMarket\OrdersAmount\Extenders;

use Okay\Core\EntityFactory;
use Okay\Core\Modules\Extender\ExtensionInterface;
use Okay\Entities\OrdersEntity;
use Okay\Core\Design;


class FrontExtender implements ExtensionInterface{

    private $entityFactory;
    private $design;

    public function __construct(EntityFactory $entityFactory, Design $design)
    {
        $this->entityFactory = $entityFactory;
        $this->design = $design;
    }

    public function showCompletedOrders($user ){
        if(!$user) return $user;

        $ordersEntity = $this->entityFactory->get(OrdersEntity::class);
        $orders = $ordersEntity->find(['user_id' => $user->id, 'status_id'=> 4]);

        $html = "<p>&emsp; Количество выполненых заказов - " . count($orders) . "</p>";
        $this->design->assign('completed_orders_count', $html);
        
        return $user;
    }
}