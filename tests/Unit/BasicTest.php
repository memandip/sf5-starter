<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{

    public function testOne()
    {
        $this->assertTrue(true);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
        $this->assertEquals(1, 1);
    }
}
