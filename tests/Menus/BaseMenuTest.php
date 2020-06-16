<?php

namespace Tests\Menus;

use PHPUnit\Framework\TestCase;

class BaseMenuTest extends TestCase
{
    /** @test */
    /** @test */
    public function tests_that_we_grab_the_argument_passed_to_the_script()
    {
        $this->assertStringContainsString(
            '--colors=always',
            Entrance::userInput()
        );
    }
}
