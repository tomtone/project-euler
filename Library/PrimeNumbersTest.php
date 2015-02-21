<?php
namespace Library;
class PrimeNumbersTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function checkIfIsPrime()
    {
        $primeStuff = new PrimeNumbers();

        $this->assertSame(true, $primeStuff::isPrime(3));
    }

    /**
     * @test
     * @return void
     */
    public function validateNumbersgeneratedAreAllPrimes()
    {
        $primeStuff = new PrimeNumbers();

        $this->assertSame(array(2,3,5,7), $primeStuff::getPrimeNumberArray(10));
    }

    /**
     * @test
     * @return void
     */
    public function valisteSieveOfEWillFilterAsSieveOfA()
    {
        $primeStuff = new PrimeNumbers();

        $this->assertSame($primeStuff->sieveOfE(100),$primeStuff::getPrimeNumberArray(100));
    }

    /**
     * @test
     * @return void
     */
    public function checkDurationForSieveOfE()
    {
        $primeStuff = new PrimeNumbers();
        $this->assertSame(142913828922,$primeStuff->sieveOfE(2000000,true));
    }

    /**
     * @test
     * @return void
     */
    public function checkDurationForSieveOfA()
    {
        $primeStuff = new PrimeNumbers();
        $this->assertSame(142913828922,$primeStuff->getPrimeNumberArray(2000000,true));
    }
}
 