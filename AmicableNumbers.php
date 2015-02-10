<?php

class AmicableNumbers
{

    public function getAmicableNumber($number)
    {
        $sum = 0;
        for ($i = 220; $i <= $number; $i++) {
            $pair1 = $this->sumDivisors($i);
            if ($pair1 > $i && $pair1 <= $number) {
                $pair2 = $this->sumDivisors($pair1);
                if ($pair2 == $i) {
                    $sum += ($pair2 + $pair1);
                }
            }
        }
        return $sum;
    }

    public function sumDivisors($number)
    {
        $sum = 1;
        $sq = sqrt($number);
        for ($i = 2; $i <= $sq; $i++) {
            if ($number % $i == 0) {
                $sum += ($i + ($number / $i));
            }
        }
        return $sum;
    }
} 