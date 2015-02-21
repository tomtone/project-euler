<?php
namespace Problems\P25;

class The1000DigitFibonacciNumberTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function getFirstThreeDigitNumber()
    {
        $class = new The1000DigitFibonacciNumber();
        $this->assertSame(12, $class->getNumberByDigit(3));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new The1000DigitFibonacciNumber();
        $this->assertSame(4782, $class->getNumberByDigit(1000));
    }
}
 