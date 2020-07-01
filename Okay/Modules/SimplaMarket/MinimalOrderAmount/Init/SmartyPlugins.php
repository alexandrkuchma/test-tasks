<?php


use Okay\Core\Design;
use Okay\Modules\SimplaMarket\MinimalOrderAmount\Plugins\MinimalOrderAmountPlugin;
use Okay\Core\OkayContainer\Reference\ServiceReference as SR;

return [
    MinimalOrderAmountPlugin::class => [
        'class' => MinimalOrderAmountPlugin::class,
        'arguments' => [
            new SR(Design::class)
        ],
    ],
];