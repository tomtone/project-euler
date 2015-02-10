<?php

class FactorialDigitSum {

    public function calculateDigitSum($max)
    {
        $digitSum = 1;
        for(;$max > 0; $max--){
            $digitSum = bcmul($max, $digitSum);
        }
        return $digitSum;
    }

    public function calculateDigitNumbersSum($max)
    {
        $number = $this->calculateDigitSum($max);
        $digits = str_split($number);
        return array_sum($digits);
    }
} 