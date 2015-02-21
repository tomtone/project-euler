<?php
namespace Problems\P25;
class The1000DigitFibonacciNumber extends \Library\Timer{

    public function getNumberByDigit($digits)
    {
        $i = 1;
        $first = 0;
        $second = 1;
        $fibonacci = 1;
        $max = bcpow(10, $digits-1);
        while(bccomp($fibonacci, $max) == -1) {
            $fibonacci = bcadd($first,$second);
            $first = $second;
            $second = $fibonacci;
            $i++;
        }
        return $i;
    }
} 