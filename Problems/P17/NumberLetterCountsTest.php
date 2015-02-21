<?php
namespace Problems\P17;
class NumberLetterCountsTest extends \PHPUnit_Framework_TestCase{

    /**
     * @test
     * @return void
     */
    public function getLetterCountSumForDemo()
    {
        $class = new NumberLetterCounts();
        $this->assertSame(19, $class->letterCount(1,5));
    }

    /**
     * @test
     * @return void
     */
    public function getLetterCountSumForAbove10()
    {
        $class = new  NumberLetterCounts();
        $this->assertSame(74, $class->letterCount(1,15));
    }

    /**
     * @test
     * @return void
     */
    public function getLetterCountSumForAbove30()
    {
        $class = new  NumberLetterCounts();
        $this->assertSame(257, $class->letterCount(1,35));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new  NumberLetterCounts();
        $this->assertSame(21124, $class->letterCount(1,1000));
    }
}