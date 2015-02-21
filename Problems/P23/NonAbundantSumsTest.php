<?php
namespace Problems\P23;
class NonAbundantSumsTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function getSmallestAbundantNumberSumTest()
    {
        $class = new NonAbundantSums();
        $this->assertSame(1, $class->getSmallestAbundantNumberSum());
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new NonAbundantSums();
        $this->assertSame(4179871, $class->getSumOfAllAbundantNumbers());
    }
}
 