<?php

namespace Tests\Feature;

use Tests\DummyWorkflow;
use PHPUnit\Framework\TestCase;

class BaseWorkflowTest extends TestCase
{
    /** @test */
    public function it_can_get_the_current_menu_class_to_call()
    {
        $this->assertEquals(
            '{"items":[{"uid":"start_workflow","title":"Starting!","subtitle":"Nice subtitle","arg":"do"}]}',
            DummyWorkflow::currentMenu()
        );
    }

    /** @test */
    public function it_can_do_something()
    {
        $this->assertFalse(DummyWorkflow::do());
    }

    /** @test */
    public function it_calls_the_Workflow_method_passed_in_variable_if_exists()
    {
        putenv('action=returnTrue');

        $this->assertTrue(DummyWorkflow::do());
    }

    /** @test */
    public function it_can_notify_the_grand_public()
    {
        putenv('action=returnTrue');

        $this->assertEquals(
            'Oops... cannot returnTrue.',
            DummyWorkflow::notify(false)
        );

        $this->assertEquals(
            'returnTrue is done!',
            DummyWorkflow::notify(true)
        );
    }
}
