<?php
namespace Problems\P4;
class LargestPalindromeProductTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function checkLArgestPolindromeProduct()
    {
        $class = new LargestPalindromeProduct();
        $this->assertSame(9009, $class->getLargestFromPolindrome());
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new LargestPalindromeProduct();
        $this->assertSame(906609, $class->getLargestFromPolindrome(100,999));
    }
}
 