<?php

namespace Kanboard\Plugin\Css;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', 'plugins/Css/skin.css');
    }
}
