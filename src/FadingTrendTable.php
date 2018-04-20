<?php
declare(strict_types=1);

namespace App;

class FadingTrendTable
{
    private $table;

    public function __construct(FadingTrend ...$trends)
    {
        $this->table = $trends;
    }

    public function getTrendFor(int $value): ?FadingTrend
    {
        /** TODO: implement binary search here */
        foreach ($this->table as $trend) {
            if ($trend->inTrend($value)) {
                return $trend;
            }
        }

        return null;
    }
}