<?php
namespace Problems\P20;
class FactorialDigitSum extends \Library\Timer {

    public function calculateDigitSum($max, $asInt = false)
    {
        $digitSum = 1;
        for(;$max > 0; $max--){
            $digitSum = bcmul($max, $digitSum);
        }
        if($asInt){
            return (int)$digitSum;
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