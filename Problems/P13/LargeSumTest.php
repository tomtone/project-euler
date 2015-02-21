<?php
namespace Problems\P13;
class LargeSumTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new LargeSum();
        $this->assertSame('5537376230', $class->getSum());
    }
}
 