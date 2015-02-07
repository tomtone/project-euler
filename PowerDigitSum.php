<?php

class PowerDigitSum{

    public function calculateSum($base, $exponent)
    {
        $value = bcpow($base, $exponent);
        $values = str_split($value);
        return array_sum($values);
    }
}