<?php
namespace Problems\P14;
class LongestCollatzSequence extends \Library\Timer{

    public function calculateCollatzSequence($startNumber)
    {
        $number = $startNumber;
        $chain = array($startNumber);
        while($number > 1){
            if($number%2 == 0){
                $number = $number/2;
            }else{
                $number = (3 * $number) +1;
            }
            $chain[] = $number;
        }
        return count($chain);
    }

    public function getLongestChainByMaxValue($maxValue)
    {
        $maxChainLength = 0;
        $startNumber = 0;
        for($i = 0; $i <= $maxValue; $i++){
            $currentChain = $this->calculateCollatzSequence($i);
            if($currentChain > $maxChainLength){
                $startNumber = $i;
                $maxChainLength = $currentChain;
            }
        }

        return $startNumber;
    }
}