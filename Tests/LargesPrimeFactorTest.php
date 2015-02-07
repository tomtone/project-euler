<?php
require "../LargestPrimeFactor.php";
class LargesPrimeFactorTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function largestPrimeFactorForExample()
    {
        $class = new LargesPrimeFactor();
        $this->assertSame(29, $class->getLargestPrimeFactor(13195));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new LargesPrimeFactor();
        $this->assertSame(6857, $class->getLargestPrimeFactor(600851475143));
    }
}
 