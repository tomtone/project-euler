<?php
namespace Problems\P22;
class NamesScoresTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function getRankingforNameColin()
    {
        $class = new NamesScores();
        $this->assertSame(49714, $class->getScoreForName("Colin", 938));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new NamesScores();
        $this->assertSame(871198282, $class->readNameList());
    }
}
 