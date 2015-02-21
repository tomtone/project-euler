<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 21.02.2015
 * Time: 19:25
 */

namespace Problems\P26;


class ReciprocalCyclesTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     * @return void
     */
    public function getLongestRecurringCycle()
    {
        $class = new ReciprocalCycles();
        $this->assertSame(6, $class->getLongestRecurrinbgCycle(10));
    }

    /**
     * @test
     * @return void
     */
    public function solutionProof()
    {
        $class = new ReciprocalCycles();
        $this->assertSame(983, $class->getLongestRecurrinbgCycle(1000));
    }
}
 