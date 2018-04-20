<?php
declare(strict_types=1);

namespace App;

use const INF;

class GildedRose
{
    private const MAX_QUALITY = 50;
    protected const MIN_QUALITY = 0;

    protected $sellIn;
    private $quality;
    private $fadingFactor;

    public function __construct(int $sellIn, int $fadingFactor)
    {
        $this->sellIn = $sellIn;
        $this->quality = $this->getInitialQuality();
        $this->fadingFactor = $fadingFactor;
    }

    public function getSellIn(): int
    {
        return $this->sellIn;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function growOld(): void
    {
        --$this->sellIn;
        $this->quality += $this->getDegradation();

        if ($this->quality > $this->getMaxQuality()) {
            $this->quality = $this->getMaxQuality();
        }

        if ($this->quality < self::MIN_QUALITY) {
            $this->quality = self::MIN_QUALITY;
        }
    }

    protected function getInitialQuality(): int
    {
        return self::MAX_QUALITY;
    }

    protected function getDegradation(): int
    {
        $trend = $this->getFadingTrendTable()->getTrendFor($this->sellIn);

        return -($trend !== null ? $this->fadingFactor * $trend->getIndex() : $this->fadingFactor);
    }

    protected function getFadingTrendTable(): FadingTrendTable
    {
        return new FadingTrendTable(new FadingTrend(INF, 0, 1), new FadingTrend(0, -INF, 2));
    }

    protected function getMaxQuality(): int
    {
        return self::MAX_QUALITY;
    }
}
