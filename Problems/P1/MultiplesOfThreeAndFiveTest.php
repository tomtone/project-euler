<?php
namespace Problems\P1;
class MultiplesOfThreeAndFiveTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function sumOfMulitpliesOfThreeAndFiveBelowTenWillBe23()
    {
        $class = new MultiplesOfThreeAndFive();
        $this->assertSame(23, $class->sumUp(10));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new MultiplesOfThreeAndFive();
        $this->assertSame(233168, $class->sumUp(1000));
    }
}
 