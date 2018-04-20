<?php
declare(strict_types=1);

namespace App;

class FadingTrend
{
    private $hi;
    private $low;
    private $index;

    public function __construct($hi, $low, $index)
    {
        $this->hi = $hi;
        $this->low = $low;
        $this->index = $index;
    }

    public function inTrend(int $value): bool
    {
        return $value <= $this->hi && $value > $this->low;
    }

    public function getIndex()
    {
        return $this->index;
    }
}