<?php

declare(strict_types=1);

namespace Otis22\PhpSkelleton\Tests;

use Otis22\PhpSkelleton\Test;
use packagetest\Sortarray;
use packagetest\Mergearray;
use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{
    /**
     * @var array<int, int>
     */
    private $arrayTest = [];

    public function setUp(): void
    {
        $this->arrayTest = [2,4,1,3];
    }

    public function testOne(): void
    {
        $this->assertEquals(
            (new Test())->one(),
            1
        );
    }
    public function testTwo(): void
    {
        $this->assertEquals(
            (new Test())->two(),
            2
        );
    }

    public function testSorteArray(): void
    {
        $sortedArray = new Sortarray($this->arrayTest);
        $result = iterator_to_array($sortedArray);
        $this->assertEquals($result, [1, 2, 3, 4]);
    }

    public function testCountArray(): void
    {
        $this->assertEquals(
            (new Sortarray($this->arrayTest))->count(),
            4
        );
    }

    public function testMerged(): void
    {
        $sortedArray = new Mergearray([3, 2, 1], [1, 2, 3]);
        $result = iterator_to_array($sortedArray);
        $this->assertEquals($result, [3, 2, 1, 1, 2, 3]);
    }

    public function testSortedMerged(): void
    {
        $sortedArray = new Sortarray(iterator_to_array(new Mergearray([3, 2, 1], [1, 2, 3])));
        $result = iterator_to_array($sortedArray);
        $this->assertEquals($result, [1, 1, 2, 2, 3, 3]);
    }
}
