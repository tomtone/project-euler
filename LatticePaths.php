<?php

class LatticePaths
{

    public function getPathsForSquare($size)
    {
        $paths = 1;
        $grid = array();
        for ($i = 0; $i < $size; $i++) {
            $grid[$i][$size] = 1;
            $grid[$size][$i] = 1;
        }
        for ($i = $size - 1; $i >= 0; $i--) {
            for ($j = $size - 1; $j >= 0; $j--) {
                $grid[$i][$j] = $grid[$i + 1][$j] + $grid[$i][$j + 1];
            }
        }
        return max(max($grid));
    }
}