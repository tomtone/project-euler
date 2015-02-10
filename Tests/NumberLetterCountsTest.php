<?php
/**
 * If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
 *
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 *
 *
 * NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen)
 * contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.
 */
require "../NumberLetterCounts.php";
class NumberLetterCountsTest extends PHPUnit_Framework_TestCase{

    /**
     * @test
     * @return void
     */
    public function getLetterCountSumForDemo()
    {
        $class = new  NumnberLetterCounts();
        $this->assertSame(19, $class->letterCount(1,5));
    }

    /**
     * @test
     * @return void
     */
    public function getLetterCountSumForAbove10()
    {
        $class = new  NumnberLetterCounts();
        $this->assertSame(74, $class->letterCount(1,15));
    }

    /**
     * @test
     * @return void
     */
    public function getLetterCountSumForAbove30()
    {
        $class = new  NumnberLetterCounts();
        $this->assertSame(257, $class->letterCount(1,35));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new  NumnberLetterCounts();
        $this->assertSame(21124, $class->letterCount(1,1000));
    }
}