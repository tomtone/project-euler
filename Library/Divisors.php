<?php
namespace Library;

class Divisors {

    public static function sumDivisors($number)
    {
        $sum = 1;
        $sq = sqrt($number);
        for ($i = 2; $i <= $sq; $i++) {
            if ($number % $i == 0) {
                $sum += ($i + ($number / $i));
            }
        }
        return (int)$sum;
    }
} 