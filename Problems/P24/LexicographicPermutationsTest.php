<?php
namespace Problems\P24;
class LexicographicPermutationsTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function checkForSixthPermutation()
    {
        $class = new LexicographicPermutations();
        $this->assertSame(210, $class->getSpecificPermutation());
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new LexicographicPermutations();
        $this->assertSame('2783915460', $class->getSpecificPermutation(9,1000000));
    }
}
 