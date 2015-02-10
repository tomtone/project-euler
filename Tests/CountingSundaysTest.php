<?php
require "../CountingSundays.php";
class CountingSundaysTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function countSundaysForJanThisYear()
    {
        $class = new CountingSundays();
        $this->assertSame(4, $class->getSundays('2015-01-01','2015-01-31'));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new CountingSundays();
        $this->assertSame(4, $class->getSundays('1900-01-01','2000-01-31'));
    }
}
 