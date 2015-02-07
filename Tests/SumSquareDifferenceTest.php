<?php
require "../SumSquareDifference.php";
class SumSquareDifferenceTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function sumSquareDiferenceBetweenNatrualNumbersOneToTen()
    {
        $class = new SumSquareDifference();
        $this->assertSame(2640, $class->getSumSquareDifference(10));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new SumSquareDifference();
        $this->assertSame(25164150, $class->getSumSquareDifference(100));
    }
}
 