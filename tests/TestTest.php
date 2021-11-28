<?php

declare(strict_types=1);

namespace Otis22\PhpSkeleton;

use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{
    public function testOne(): void
    {
        $this->assertEquals((new Test())->one(), 1);
    }
}
