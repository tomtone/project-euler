<?php
require "../FactorialDigitSum.php";
class FactorialDigitSumTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function calculateDigitSumDemo()
    {
        $class = new FactorialDigitSum();
        $this->assertSame(3628800, $class->calculateDigitSum(10));
    }

    /**
     * @test
     * @return void
     */
    public function calculateDigitNumberSumDemo()
    {
        $class = new FactorialDigitSum();
        $this->assertSame(27, $class->calculateDigitNumbersSum(10));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new FactorialDigitSum();
        $this->assertSame(648, $class->calculateDigitNumbersSum(100));
    }
}
 