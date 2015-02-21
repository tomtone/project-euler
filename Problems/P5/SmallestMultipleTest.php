<?php
namespace Problems\P5;
class SmallestMultipleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function smallestEvenlyDivisibleNumberForOneToTen()
    {
        $class = new SmallestMultiple();
        $this->assertSame(2520, $class->getSmallestEvenlyDivisibleForOneToTen(1,10));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new SmallestMultiple();
        $this->assertSame(232792560, $class->getSmallestEvenlyDivisibleForOneToTwenty(1,20));
    }
}
 