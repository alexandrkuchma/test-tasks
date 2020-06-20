<?php

use Okay\Core\EntityFactory;
use Okay\Core\OkayContainer\Reference\ServiceReference as SR;
use Okay\Modules\SimplaMarket\OrdersAmount\Extenders\FrontExtender;
use Okay\Core\Design;

return [
    FrontExtender::class => [
        'class' => FrontExtender::class,
        'arguments' => [ new SR(EntityFactory::class),
                        new SR(Design::class)],
    ],
];