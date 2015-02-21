<?php
namespace Problems\P12;
use Library\PrimeNumbers;
class HighlyDivisibleTriangularNumber extends \Library\Timer{

    public function getTriangularNumber($maxDivisors)
    {
        $result = 0;
        $i = 1;
        $primes = PrimeNumbers::sieveOfE($maxDivisors*150);
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