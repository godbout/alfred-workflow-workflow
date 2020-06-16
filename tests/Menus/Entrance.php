<?php

namespace Tests\Menus;

use Godbout\Alfred\Workflow\Item;
use Godbout\Alfred\Workflow\ScriptFilter;
use Godbout\Alfred\Workflow\Menus\BaseMenu;

class Entrance extends BaseMenu
{
    public static function scriptFilter()
    {
        ScriptFilter::add(
            Item::create()
                ->uid('start_workflow')
                ->title('Starting!')
                ->subtitle('Nice subtitle')
                ->arg('do')
        );
    }
}
