<?php
require "../EvenFibonacciNumbers.php";
class EvenFibonacciNumbersTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function evenSumforFibonacciWillBeFourtyFour()
    {
        $class = new EvenFibonacciNumbers();
        $this->assertSame(44, $class->sumEvenNumbersForMaxNumber(89));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new EvenFibonacciNumbers();
        $this->assertSame(4613732, $class->sumEvenNumbersForMaxNumber(4000000));
    }
}
 