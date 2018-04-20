<?php
declare(strict_types=1);

namespace App;

use const INF;

class BackstagePasses extends GildedRose
{
    protected function getDegradation(): int
    {
        return abs(parent::getDegradation());
    }

    protected function getFadingTrendTable(): FadingTrendTable
    {
        return new FadingTrendTable(
            new FadingTrend(10, 5, 2),
            new FadingTrend(5, 0, 3),
            new FadingTrend(0, -INF, 0)
        );
    }

}