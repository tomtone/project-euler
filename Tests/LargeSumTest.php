<?php
require "../LargeSum.php";
class LargeSumTest extends PHPUnit_Framework_TestCase {

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
 