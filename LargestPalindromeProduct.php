<?php
class LargestPalindromeProduct{

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
/*
$start = microtime(true);
$maxPalindrome = 0;
$min = 100;
$max = 999;
for ($a = $max; $a >= $min; $a--) {
    for ($b = $max; $b >= $min; $b--) {
        $value = $a * $b;
        if($value <= $maxPalindrome){
            break;
        }
        if($value == strrev($value)) {
            $maxPalindrome = $value;
            echo $value . "\n";
        }
    }
}
echo "\n\n\n".microtime(true)-$start.' Sekunden verbraucht';
*/