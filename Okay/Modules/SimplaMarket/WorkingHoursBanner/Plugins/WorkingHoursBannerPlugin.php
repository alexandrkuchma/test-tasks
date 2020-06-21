<?php


namespace Okay\Modules\SimplaMarket\WorkingHoursBanner\Plugins;


use Okay\Core\Design;
use Okay\Core\SmartyPlugins\Func;

class WorkingHoursBannerPlugin extends Func
{
    protected $tag = 'working_hours_banner';

    protected $design;

    public function __construct(Design $design)
    {
        $this->design = $design;
    }

    public function run()
    {
        return $this->design->fetch('working_hours.tpl');
    }
}