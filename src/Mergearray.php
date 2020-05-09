<?php

declare(strict_types=1);

namespace packagetest;

/**
 * @template T
 *
 * @implements \Iterator<int, int>
 */
class Mergearray implements \Iterator
{
    /**
     * @var int
     */
    private $position;
    /**
     * @var array<int, int>
     */
    private $array = [];

    public function __construct(iterable ...$data)
    {
        $this->position = 0;
        $this->merge($data);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function current(): int
    {
        return $this->array[$this->position];
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->array);
    }

    /**
     * @param array<int, iterable> $data
     */
    //public function merge(iterable $data): void
    public function merge(array $data): void
    {
        $combinedIterator = new \AppendIterator();
        foreach ($data as $itemData) {
            $array = (array) $itemData;
            $combinedIterator->append(new \ArrayIterator($array));
        }
        $this->array = iterator_to_array($combinedIterator, false);
    }
}
