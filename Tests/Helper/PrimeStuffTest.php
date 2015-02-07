<?php
require ('../../Helper/PrimeStuff.php');

class PrimeStuffTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function checkIfIsPrime()
    {
        $primeStuff = new PrimeStuff();

        $this->assertSame(true, $primeStuff::isPrime(3));
    }

    /**
     * @test
     * @return void
     */
    public function validateNumbersgeneratedAreAllPrimes()
    {
        $primeStuff = new PrimeStuff();

        $this->assertSame(array(2,3,5,7), $primeStuff::getPrimeNumberArray(10));
    }
}
 