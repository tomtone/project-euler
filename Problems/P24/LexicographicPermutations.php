<?php
namespace Problems\P24;
use Library\Factorial;

class LexicographicPermutations extends \Library\Timer{

    public function getSpecificPermutation($max = 2, $position = 6)
    {
        $perms = range(0,$max);
        $permutation = "";
        $maxCount = count($perms);
        $remain = $position - 1;
        for($i = 1; $i < $maxCount; $i++){
            $perms = array_values($perms);
            $j = (int) $remain / Factorial::getFactorials($maxCount - $i);
            $remain = (int) $remain % Factorial::getFactorials($maxCount - $i);
            $permutation .= $perms[$j];
            unset($perms[$j]);
            if ($remain == 0) {
                break;
            }

        }
        foreach($perms as $number) {
            $permutation .= $number;
        }
        return $permutation;
    }

}