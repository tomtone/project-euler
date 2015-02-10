<?php
/**
 * If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
 *
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 *
 *
 * NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen)
 * contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.
 */

class NumnberLetterCounts{

    protected $_letterForNumber = array(
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty ',
        30 => 'thirty ',
        40 => 'forty ',
        50 => 'fifty ',
        60 => 'sixty ',
        70 => 'seventy ',
        80 => 'eighty ',
        90 => 'ninety ',
        100 => 'hundred ',
        1000 => 'thousand '
    );

    public function letterCount($start = 1, $end = 5)
    {
        $value = $this->buildStringForLetters($start, $end);
        return $value;
    }

    protected function buildStringForLetters($start, $end)
    {
        $stringArray = array();
        for($i = $start; $i <= $end; $i++){
            $string = '';
            $split = str_split($i);
            if(count($split) == 1){
                $string .= $this->_letterForNumber[$i];
            }elseif(count($split) == 2){
                $string .= $this->replaceBelowOneHundred($i, $split);
            }elseif(count($split) == 3){
                $string .= $this->_letterForNumber[$split[0]];
                $string .= $this->_letterForNumber[100];
                if($i % 100 != 0) {
                    $string .= 'and ';
                    $number = ($split[1] == 0) ? '' : $split[1];
                    $number .=  $split[2];
                    unset($split[0]);
                    $split = array_values($split);
                    $string .= $this->replaceBelowOneHundred($number, $split);
                }
            }elseif(count($split) == 4){
                $string .= $this->_letterForNumber[$split[0]];
                $string .= $this->_letterForNumber[1000];
            }
            $stringArray[] = $string;
        }
        $sum = 0;
        foreach($stringArray as $part){
            $sum += strlen(str_replace(' ', '',$part));
        }
        return $sum;
    }

    protected function replaceBelowOneHundred($i, $split){
        $string = '';
        if ($i < 20) {
            $string .= $this->_letterForNumber[$i];
        } elseif ($i % 10 == 0) {
            $string .= $this->_letterForNumber[$i];
        } else {
            $string .= $this->_letterForNumber[$split[0] * 10];
            $string .= $this->_letterForNumber[$split[1]];
        }
        return $string;
    }
}