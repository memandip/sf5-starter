<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testShouldAssertEqual(): void
    {
        $this->assertEquals(1, 1);
        $this->assertTrue(true);
    }
}
