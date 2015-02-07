<?php
require_once "Helper/PrimeStuff.php";
class HighlyDivisibleTriangularNumber extends PrimeStuff{

    public function getTriangularNumber($maxDivisors)
    {
        $result = 0;
        $i = 1;
        $primes = $this->getPrimeNumberArray($maxDivisors*150);
        while($this->divisors($result,$primes) < $maxDivisors){
            $result += $i;
            $i++;
        }
        return $result;
    }
    protected function divisors($number, $primes){
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
}