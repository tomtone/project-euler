<?php
namespace Problems\P4;
class LargestPalindromeProduct extends \Library\Timer{

    protected $_maxPalindrome = 0;

    /**
     * @param int $min
     * @param int $max
     *
     * @return int
     */
    public function getLargestFromPolindrome($min = 1, $max = 100)
    {
        for ($a = $max; $a >= $min; $a--) {
            for ($b = $max; $b >= $min; $b--) {
                $value = $a * $b;
                if($value <= $this->_maxPalindrome){
                    break;
                }
                if($value == strrev($value)) {
                    $this->_maxPalindrome = $value;
                }
            }
        }
        return $this->_maxPalindrome;
    }
}