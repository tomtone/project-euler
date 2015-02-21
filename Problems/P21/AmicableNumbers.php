<?php
namespace Problems\P21;
use Library\Divisors;
class AmicableNumbers extends \Library\Timer
{

    public function getAmicableNumber($number)
    {
        $sum = 0;
        for ($i = 220; $i <= $number; $i++) {
            $pair1 = Divisors::sumDivisors($i);
            if ($pair1 > $i && $pair1 <= $number) {
                $pair2 = Divisors::sumDivisors($pair1);
                if ($pair2 == $i) {
                    $sum += ($pair2 + $pair1);
                }
            }
        }
        return $sum;
    }
} 