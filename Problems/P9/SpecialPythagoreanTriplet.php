<?php
namespace Problems\P9;
class SpecialPythagoreanTriplet extends \Library\Timer{

    public function getABCProductForTriplet($sum)
    {
        for($a = 1; $a < $sum/3; $a++){
            for($b = $a; $b <= $sum/2; $b++){
                $c = $sum - $a - $b;
                if ( ($a*$a + $b*$b) == ($c*$c) ){
                    return ($a*$b*$c);
                }
            }
        }
    }
}