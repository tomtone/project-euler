<?php
namespace Problems\P16;
class PowerDigitSumTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function checkRoutinesForTest()
    {
        $class = new PowerDigitSum();
        $this->assertSame(26, $class->calculateSum(2,15));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new PowerDigitSum();
        $this->assertSame(1366, $class->calculateSum(2,1000));
    }
}
 