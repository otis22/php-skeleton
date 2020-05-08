<?php

declare(strict_types=1);

namespace packagetest\Tests;

use packagetest\Toarray;

class Testtoarray
{
    public function testsortarray(): void
    {
        $this->assertEquals(
            (new Toarray())->__toArray(),
            true
        );
    }
}
