<?php

namespace Godbout\Alfred\Workflow\Menus;

abstract class BaseMenu
{
    abstract public static function scriptFilter();

    public static function userInput()
    {
        global $argv;

        return trim($argv[1] ?? '');
    }
}
