<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_addition(): void
    {
        $a = 1;
        $b = 2;
        $this->assertSame(3, $a + $b);
    }
}
