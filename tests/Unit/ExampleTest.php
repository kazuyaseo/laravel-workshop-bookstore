<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testAddition(): void
    {
        $a = 1;
        $b = 2;
        $this->assertSame(3, $a + $b);
    }
}
