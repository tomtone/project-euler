<?php
namespace Problems\P15;
class LatticePathsTest extends \PHPUnit_Framework_TestCase{

    /**
     * @test
     * @return void
     */
    public function checkPossiblePathsForSmallSquare()
    {
        $class = new LatticePaths();
            $this->assertSame(6, $class->getPathsForSquare(2));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new LatticePaths();
        $this->assertSame(137846528820, $class->getPathsForSquare(20));
    }
}