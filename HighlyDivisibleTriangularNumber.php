<?php
$start = microtime(true);
$i = 1;
$number = 0;
$primes = getPrimes(100000);
while(divisors($number,$primes) < 500){
    $number += $i;
    $i++;
}
print_r($number . "\n");
echo microtime(true) - $start.' Sekunden verbraucht';


function divisors($number, $primes){
    $divisors = 1;
    for($i = 0; $i < count($primes); $i++){
        if($primes[$i]*$primes[$i] > $number){
            return $divisors * 2;
        }
        $exponent = 1;
        while($number % $primes[$i] == 0){
            $exponent++;
            $number = $number / $primes[$i];
        }
        $divisors *= $exponent;
        if ($number == 1) {
            return $divisors;
        }
    }
    return $divisors;
}
function getPrimes($limit) {
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
    return $primes;
}