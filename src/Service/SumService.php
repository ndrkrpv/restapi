<?php

namespace App\Service;

class SumService
{
    /**
     * @param float $a First addendum
     * @param float $b Second addendum
     * @return float Sum
     */
    public function makeSum(float $a, float $b) {
        return $a + $b;
    }
}