<?php
declare(strict_types=1);

namespace App;

class Sulfuras extends GildedRose
{
    private const QUALITY = 80;

    protected function getDegradation(): int
    {
        return 0;
    }

    protected function getMaxQuality(): int
    {
        return self::QUALITY;
    }
}