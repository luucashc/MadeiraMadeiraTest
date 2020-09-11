<?php

use PHPUnit\Framework\TestCase;

use Model\Calculation;

/**
 * Unit test class.
 *
 * To test whether the calculation is matching the expected result value.
 *
 */
class MyTest extends TestCase
{
    public function test()
    {
        // $this->assertTrue(true);
        $calculation = new Calculation();

        $this->assertTrue($calculation->calculation(10) == 25);

        $this->assertTrue($calculation->calculation(50) == 625);

        $this->assertTrue($calculation->calculation(100) == 2500);
    }
}
