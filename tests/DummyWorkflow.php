<?php

namespace Tests;

use Godbout\Alfred\Workflow\BaseWorkflow;

class DummyWorkflow extends BaseWorkflow
{
    public static function returnTrue()
    {
        return true;
    }
}
