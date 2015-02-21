<?php
namespace Problems\P16;
class PowerDigitSum extends \Library\Timer{

    public function calculateSum($base, $exponent)
    {
        $value = bcpow($base, $exponent);
        $values = str_split($value);
        return array_sum($values);
    }
}