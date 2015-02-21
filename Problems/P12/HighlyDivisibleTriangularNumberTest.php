<?php
namespace Problems\P12;
class HighlyDivisibleTriangularNumberTest extends \PHPUnit_Framework_TestCase {

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
        $this->assertSame(76576500, $class->getTriangularNumber(500));
    }
}
 