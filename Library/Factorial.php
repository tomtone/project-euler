<?php
namespace Library;


class Factorial {

    public static function getFactorials($factorial) {
        if($factorial < 2) {
            return 1;
        }

        $p = 1;
        for($i = 1; $i <= $factorial; $i++){
            $p = bcmul($i, $p);
        }
        return $p;
    }
} 