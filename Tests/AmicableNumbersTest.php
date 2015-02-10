<?php
require "../AmicableNumbers.php";
class AmicableNumbersTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function getCorrectAmicableNumber()
    {
        $class = new AmicableNumbers();
        $this->assertSame(504, $class->getAmicableNumber(284));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new AmicableNumbers();
        $this->assertSame(31626, $class->getAmicableNumber(10000));
    }
}
 