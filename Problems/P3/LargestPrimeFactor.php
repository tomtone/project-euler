<?php
namespace Problems\P3;
use Library\PrimeNumbers;
class LargestPrimeFactor extends \Library\Timer{

    public function getLargestPrimeFactor($number)
    {
        $primes = array();
        for ($i = 2; $i <= sqrt($number); $i++) {
            if (($number / $i) == ceil($number / $i)) {
                if (PrimeNumbers::isPrime($i)) {
                    $primes[] = $i;
                }
            }
        }
        return max($primes);
    }
}