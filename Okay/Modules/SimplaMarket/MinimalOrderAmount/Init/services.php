<?php

namespace Okay\Modules\SimplaMarket\MinimalOrderAmount\Init;
use Okay\Core\OkayContainer\Reference\ServiceReference as SR;
use Okay\Modules\SimplaMarket\MinimalOrderAmount\Extenders\BackendExtender;
use Okay\Modules\SimplaMarket\MinimalOrderAmount\Extenders\FrontExtender;
use Okay\Core\Settings;
use Okay\Core\Request;
use Okay\Core\Cart;
use Okay\Core\FrontTranslations;
use Okay\Core\Money;
use Okay\Core\EntityFactory;

return [
    BackendExtender::class => [
        'class' => BackendExtender::class,
        'arguments' => [ new SR(Request::class),
                        new SR(Settings::class)],
    ],

    FrontExtender::class => [
        'class' => FrontExtender::class,
        'arguments' => [ new SR(Settings::class),
                        new SR(Cart::class),
                        new SR(FrontTranslations::class),
                        new SR(Money::class),
                        new SR(EntityFactory::class)],
    ],
];