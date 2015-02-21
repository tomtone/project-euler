<?php
namespace Problems\P23;

use Library\PrimeNumbers;

class NonAbundantSums extends \Library\Timer
{
    const UPPER_ABUNDANT_LIMIT = 28123;

    protected $_smallestNumber = 24;
    protected $_sievedNumbers = array();

    public function __construct()
    {
        $this->_sievedNumbers = PrimeNumbers::sieveOfE(self::UPPER_ABUNDANT_LIMIT);
    }

    public function getSmallestAbundantNumberSum($max = 24)
    {
        return $this->getSumOfAmountOfAbundantNumbers($max);
    }

    public function getSumOfAllAbundantNumbers()
    {
        return $this->getSumOfAmountOfAbundantNumbers();
    }

    protected function getAllAbundantNumbers($max)
    {
        $abundantNumbers = array();
        for ($i = 2; $i <= $max; $i++) {
            if (PrimeNumbers::primeFactorizationSum($i, $this->_sievedNumbers) > $i) {
                $abundantNumbers[] = $i;
            }
        }
        return $abundantNumbers;
    }

    protected function getSumOfAmountOfAbundantNumbers($max = self::UPPER_ABUNDANT_LIMIT)
    {
        $sum = 0;
        $abundantNumbers = $this->getAllAbundantNumbers($max);
        $limit = count($abundantNumbers);
        $canBeAbundant = array_fill(0, $max + 1, false);
        for ($i = 0; $i < $limit; $i++) {
            for ($j = $i; $j < $limit; $j++) {
                if($abundantNumbers[$i] + $abundantNumbers[$j] <= $max){
                    $canBeAbundant[$abundantNumbers[$i] + $abundantNumbers[$j]] = true;
                }else{
                    break;
                }
            }
        }
        for ($i = 1; $i <= $max; $i++) {
        if (!$canBeAbundant[$i]) {
            $sum += $i;
        }
}
        return $sum;
    }
} 