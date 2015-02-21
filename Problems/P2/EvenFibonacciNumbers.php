<?php
namespace Problems\P2;
class EvenFibonacciNumbers extends \Library\Timer{

    public function sumEvenNumbersForMaxNumber($limit)
    {
        $sum = 2;
        $x = 1;
        $y = 2;
        $sum = $y;
        $z = 0;
        while($z < $limit) {
            $z = $x + $y;
            $x = $y;
            $y = $z;
            if($z%2==0) $sum =$sum+$z;
        }
        return $sum;
    }
}