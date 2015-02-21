<?php
namespace Library;
class PrimeNumbers{

    public static function isPrime($number)
    {
        if($number == 2 || $number == 3 || $number == 5 || $number == 7){
            return true;
        }
        if($number == 1 || $number%2 == 0){
            return false;
        }
        $sqrt = sqrt($number);
        for ($i = 3; $i <= $sqrt; $i+=2) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * Atkins Sieve implementation
     *
     * given param determines largest prim is < limit
     *
     * @param $limit integer
     * @param $sumUp boolean
     *
     * @return array
     */
    public static function getPrimeNumberArray($limit, $sumUp = false){
        $sqrt = sqrt($limit);
        $isPrime = array_fill(0, $limit + 1, false);
        for ($i = 1; $i <= $sqrt; $i++) {
            for ($j = 1 ; $j <= $sqrt; $j++) {
                $n = 4 * pow($i, 2) + pow($j, 2);
                if ($n <= $limit && ($n % 12 == 1 || $n % 12 == 5)) {
                    $isPrime[$n] ^= true;
                }
                $n = 3 * pow($i, 2) + pow($j, 2);
                if ($n <= $limit && $n % 12 == 7) {
                    $isPrime[$n] ^= true;
                }
                $n = 3 * pow($i, 2) - pow($j, 2);
                if ($i > $j && $n <= $limit && $n % 12 == 11) {
                    $isPrime[$n] ^= true;
                }
            }
        }
        for ($n = 5 ; $n <= $sqrt ; $n++) {
            if ($isPrime[$n]) {
                $s = pow($n, 2);
                for ($k = $s; $k <= $limit; $k += $s) {
                    $isPrime[$k] = false;
                }
            }
        }
        $primes[] = 2;
        $primes[] = 3;
        for ( $i = 0 ; $i < $limit ; $i++) {
            if ($isPrime[$i]) {
                $primes[] = $i;
            }
        }
        if($sumUp){
            return array_sum($primes);
        }
        return $primes;
    }

    public static function sieveOfE($max, $sumUp = false)
    {
        $value = 2; //smallest known prim
        $range = range(2, $max);
        $primes = array_combine($range, $range);

        while($value < sqrt($max)) {
            for ($i = $value; $i <= $max; $i += $value) {
                if ($i == $value) {
                    continue;
                }
                unset($primes[$i]);
            }
            $value = next($primes);
        }
        if($sumUp){
            return array_sum($primes);
        }
        return array_keys($primes);
    }

    public static function primeFactorizationSum($number, $primeList)
    {
        $currentNumber = $number;
        $sum = 1;
        $prime = 1;
        $i = 0;
        while($prime * $prime <= $currentNumber && $currentNumber > 1 && $i < count($primeList)){
            $prime = $primeList[$i];
            $i++;
            if($currentNumber % $prime === 0){
                $j = $prime * $prime;
                $currentNumber = $currentNumber / $prime;
                while($currentNumber % $prime === 0){
                    $j = $j * $prime;
                    $currentNumber = $currentNumber / $prime;
                }
                $sum *= (($j - 1) / ($prime -1));
            }
        }

        if($currentNumber > 1){
            $sum *= $currentNumber +1;
        }
        return $sum - $number;
    }
}