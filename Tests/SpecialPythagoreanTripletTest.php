<?php
require "../SpecialPythagoreanTriplet.php";
class SpecialPythagoreanTripletTest extends PHPUnit_Framework_TestCase {
    /**
     * @test
     * @return void
     */
    public function getTheABCProductForPythagoreanTriplet()
    {
        $class = new SpecialPythagoreanTriplet();
        $this->assertSame(60, $class->getABCProductForTriplet(12));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new SpecialPythagoreanTriplet();
        $this->assertSame(31875000, $class->getABCProductForTriplet(1000));
    }
}
 