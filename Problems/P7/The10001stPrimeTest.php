<?php
namespace Problems\P7;
class The10001stPrimeTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     * @return void
     */
    public function checkForThe6thPrime()
    {
        $class = new The10001stPrime();
        $this->assertSame(13, $class->getPositionedPrimeNumber(6));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new The10001stPrime();
        $this->assertSame(104743, $class->getPositionedPrimeNumber(10001));
    }
}
 