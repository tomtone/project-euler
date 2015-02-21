<?php
namespace Problems\P14;
class LongestCollatzSequenceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function validateChainContains10Terms()
    {
        $class = new LongestCollatzSequence();
        $this->assertSame(10, $class->calculateCollatzSequence(13));
    }

    /**
     * @test
     * @return void
     */
    public function getLongestChainWithStartingNumberUnderOneMillion()
    {
        $class = new LongestCollatzSequence();
        $this->assertSame(837799, $class->getLongestChainByMaxValue(1000000));
    }
}
 