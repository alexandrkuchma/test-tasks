<?php

namespace Okay\Modules\SimplaMarket\MinimalOrderAmount\Plugins;

use Okay\Core\Design;
use Okay\Core\SmartyPlugins\Func;

class MinimalOrderAmountPlugin extends Func
{
    protected $tag = 'error_min_order_amount';

    protected $design;

    public function __construct(Design $design)
    {
        $this->design = $design;
    }

    public function run()
    {
        return $this->design->fetch('error_min_order_amount.tpl');
    }
}