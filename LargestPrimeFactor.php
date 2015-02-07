<?php
require_once "Helper/PrimeStuff.php";
class LargesPrimeFactor{

    public function getLargestPrimeFactor($number)
    {
        $primes = array();
        for ($i = 2; $i <= sqrt($number); $i++) {
            if (($number / $i) == ceil($number / $i)) {
                if (PrimeStuff::isPrime($i)) {
                    $primes[] = $i;
                }
            }
        }
        return max($primes);
    }
}