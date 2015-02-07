<?php
require "../SmallestMultiple.php";
class SmallestMultipleTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function smallestEvenlyDivisibleNumberForOneToTen()
    {
        $class = new SmallesMultiple();
        $this->assertSame(2520, $class->getSmallestEvenlyDivisibleForOneToTen(1,10));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new SmallesMultiple();
        $this->assertSame(232792560, $class->getSmallestEvenlyDivisibleForOneToTwenty(1,20));
    }
}
 