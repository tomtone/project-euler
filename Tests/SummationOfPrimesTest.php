<?php
require "../SummationOfPrimes.php";
class SummationOfPrimesTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function checkSumOfPrimesBelowValue()
    {
        $class = new SummationOfPrimes();
        $this->assertSame(17, $class->sumPrimesBelowValue(10));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new SummationOfPrimes();
        $this->assertSame(142913828922, $class->sumPrimesBelowValue(2000000));
    }
}
 