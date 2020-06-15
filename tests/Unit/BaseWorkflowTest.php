<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Tests\DummyWorkflow;

class BaseWorkflowTest extends BaseTestCase
{
    /** @test */
    public function it_is_a_singleton()
    {
        $this->assertSame(
            DummyWorkflow::getInstance(),
            DummyWorkflow::getInstance()
        );
    }

    /** @test */
    public function it_can_be_destroyed()
    {
        $firstInstance = DummyWorkflow::getInstance();

        DummyWorkflow::destroy();

        $secondInstance = DummyWorkflow::getInstance();

        $this->assertNotSame($firstInstance, $secondInstance);
    }
}
