<?php

declare(strict_types=1);

namespace packagetest;

class Toarray
{
    public function __toArray() :bool
    {
        return true;
    }
}
