<?php

declare(strict_types=1);

namespace packagetest;

class Sortarray
{
    /**
     * @param array<string|int> $array
     * @param int $sort_flags
     * @return bool
     */
    public function mysort(array &$array, int $sort_flags = SORT_REGULAR) :bool
    {
        return sort($array, $sort_flags);
    }
}
