<?php

declare(strict_types=1);

namespace packagetest\Tests;

use packagetest\Sortarray;

class Testsortarray extends TestCase
{
    public function testsortarray(): void
    {
        $this->assertEquals(
            (new Sortarray([2,3,4,1]))->mysort(),
            true
        );
    }
}
