<?php
class SmallesMultiple{

    public function getSmallestEvenlyDivisibleForOneToTen($min = 1, $max = 10)
    {
        while ($max %  2 != 0 || $max %  3 != 0 || $max %  4 != 0 || $max %  5 != 0 ||
            $max %  6 != 0 || $max %  7 != 0 || $max %  8 != 0 || $max %  9 != 0 ||
            $max % 10 != 0){
            $max += 10;
        }
        return $max;
    }

    public function getSmallestEvenlyDivisibleForOneToTwenty($min = 1, $max = 20)
    {
        while ($max %  2 != 0 || $max %  3 != 0 || $max %  4 != 0 || $max %  5 != 0 ||
            $max %  6 != 0 || $max %  7 != 0 || $max %  8 != 0 || $max %  9 != 0 ||
            $max % 10 != 0 || $max % 11 != 0 || $max % 12 != 0 || $max % 13 != 0 ||
            $max % 14 != 0 || $max % 15 != 0 || $max % 16 != 0 || $max % 17 != 0 ||
            $max % 18 != 0 || $max % 19 != 0 || $max % 20 != 0 ){
            $max += 20;
        }
        return $max;
    }
}/*
$i = 20;
$start = microtime(true);
while ($i %  2 != 0 || $i %  3 != 0 || $i %  4 != 0 || $i %  5 != 0 ||
    $i %  6 != 0 || $i %  7 != 0 || $i %  8 != 0 || $i %  9 != 0 ||
    $i % 10 != 0 || $i % 11 != 0 || $i % 12 != 0 || $i % 13 != 0 ||
    $i % 14 != 0 || $i % 15 != 0 || $i % 16 != 0 || $i % 17 != 0 ||
    $i % 18 != 0 || $i % 19 != 0 || $i % 20 != 0 ){
    $i += 20;
}
echo $i . "\n";
echo "\n\n\n".microtime(true)-$start.' Sekunden verbraucht';*/