<?php
class SumSquareDifference{

    public function getSumSquareDifference($max)
    {
        $squareSum = 0;
        $sumSquare = 0;
        for($i = 1; $i <= $max; $i++){
            $squareSum += pow($i, 2);
            $sumSquare += $i;
        }
        return (pow($sumSquare,2) - $squareSum);
    }
}