<?php
declare(strict_types=1);

namespace App;

class AgedBrie extends GildedRose
{
    protected function getDegradation(): int
    {
        return abs($this->getDegradation());
    }

    protected function getInitialQuality(): int
    {
        return self::MIN_QUALITY;
    }
}