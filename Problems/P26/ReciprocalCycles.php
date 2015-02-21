<?php
namespace Problems\P26;
class ReciprocalCycles extends \Library\Timer{

    public function getLongestRecurrinbgCycle($d = 6)
    {
        $sequence = 0;
        $max = 0;
        for($i = $d; $i > 1; $i--){
            $remainders = array_fill(0,$i,0);
            $value = 1;
            $position = 0;
            while(empty($remainders[$value])&& $value != 0){
                $remainders[$value] = $position;
                $value *= 10;
                $value %= $i;
                $position++;
            }
            if(($position - $remainders[$value]) > $sequence){
                $sequence = $position - $remainders[$value];
                $max = $i;
            }
            if($i < $sequence+1){
                break;
            }
        }
        return $max;
    }
} 