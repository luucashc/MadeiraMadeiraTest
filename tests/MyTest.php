<?php

use PHPUnit\Framework\TestCase;

/**
 * [Test description]
 *
 */
class MyTest extends TestCase
{
    public function test()
    {
        // $this->assertTrue(true);
        $this->assertArrayHasKey('1', ['1' => '2']);
    }
}
