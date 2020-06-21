<?php


use Okay\Core\Design;
use Okay\Modules\SimplaMarket\WorkingHoursBanner\Plugins\WorkingHoursBannerPlugin;
use Okay\Core\OkayContainer\Reference\ServiceReference as SR;

return [
    WorkingHoursBannerPlugin::class => [
        'class' => WorkingHoursBannerPlugin::class,
        'arguments' => [
            new SR(Design::class)
        ],
    ],
];