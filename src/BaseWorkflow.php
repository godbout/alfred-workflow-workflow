<?php

namespace Godbout\Alfred\Workflow;

use ReflectionClass;
use Godbout\Alfred\Workflow\Contracts\Workflow;

abstract class BaseWorkflow implements Workflow
{
    protected static $instance = null;
    protected $scriptFilter = null;


    protected function __construct()
    {
        $this->scriptFilter = ScriptFilter::create();
    }

    final public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public static function currentMenu()
    {
        static::getCurrentMenuClass()::scriptFilter();

        return static::getInstance()->scriptFilter->output();
    }

    private static function getCurrentMenuClass()
    {
        $menu = static::getMenuClassName(getenv('next')) ?: 'Entrance';

        return (new ReflectionClass(static::class))->getNamespaceName() . "\\Menus\\" . $menu;
    }

    private static function getMenuClassName($action)
    {
        return str_replace('_', '', ucwords($action === false ? 'entrance' : $action, '_'));
    }

    public static function do()
    {
        $action = getenv('action');

        if (method_exists(static::class, $action)) {
            return static::$action();
        }

        return false;
    }

    public static function notify($result = false)
    {
        $action = getenv('action');

        if ($result === false) {
            return "Oops... cannot $action.";
        }

        return "$action is done!";
    }

    public static function destroy()
    {
        ScriptFilter::destroy();

        self::$instance = null;
    }

    final private function __clone()
    {
    }
}
