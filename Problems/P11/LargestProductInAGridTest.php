<?php
namespace Problems\P11;
class LargestProductInAGridTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new LargestProductInAGrid();
        $this->assertSame(70600674, $class->getLargestProductForFourAdjacent());;
    }
}
 