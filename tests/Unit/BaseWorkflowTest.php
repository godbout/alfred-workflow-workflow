<?php

namespace Tests\Unit;

use Tests\DummyWorkflow;
use PHPUnit\Framework\TestCase;

class BaseWorkflowTest extends TestCase
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
    public function it_cannot_be_cloned()
    {
        $this->expectException(\Error::class);

        $workflow = DummyWorkflow::getInstance();

        $newWorkflow = clone $workflow;
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
