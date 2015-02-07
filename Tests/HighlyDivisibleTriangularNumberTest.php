<?php
require "../HighlyDivisibleTriangularNumber.php";
class HighlyDivisibleTriangularNumberTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function checkForTiangularNumberWithFiveDivisors()
    {
        $class = new HighlyDivisibleTriangularNumber();
        $this->assertSame(28, $class->getTriangularNumber(5));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new HighlyDivisibleTriangularNumber();
        $this->assertSame(7657650, $class->getTriangularNumber(500));
    }
}
 