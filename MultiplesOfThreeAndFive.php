<?php

class MultiplesOfThreeAndFive{

    public function sumUp($max)
    {
        $sum = 0;
        for($i=0;$i<$max; $i++){
            if($i%3 ==0 || $i%5==0){
                $sum+=$i;
            }
        }
        return $sum;
    }
}