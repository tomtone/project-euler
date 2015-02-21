<?php
namespace Problems\P18;
class MaximumPathSumOneTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function validateRoutineforDemo()
    {
        $class = new MaximumPathSumOne();
        $this->assertSame(23, $class->sumPath());
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new MaximumPathSumOne();
        $this->assertSame(1074, $class->sumPath(false));
    }
}
 