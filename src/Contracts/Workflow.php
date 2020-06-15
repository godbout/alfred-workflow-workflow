<?php

namespace Godbout\Alfred\Workflow\Contracts;

interface Workflow
{
    public static function getInstance();

    public static function currentMenu();

    public static function do();

    public static function notify($result = false);

    public static function destroy();
}
