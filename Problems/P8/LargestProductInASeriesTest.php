<?php
namespace Problems\P8;
class LargestProductInASeriesTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function testLargestProductByFourAdjacents()
    {
        $class = new LargestProductInASeries();
        $this->assertSame(5832, $class->calculateLargetProduct(4));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new LargestProductInASeries();
        $this->assertSame(23514624000, $class->calculateLargetProduct(13));
    }
}
 