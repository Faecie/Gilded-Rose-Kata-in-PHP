<?php
declare(strict_types=1);

namespace App;

class Conjured extends GildedRose
{
    private const MULTIPLIER = 2;

    protected function getDegradation(): int
    {
        return parent::getDegradation() * self::MULTIPLIER;
    }

}