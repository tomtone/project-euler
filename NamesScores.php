<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 10.02.2015
 * Time: 21:18
 */
class NamesScores
{
    protected $_alphabet = array(
        "a" => 1,
        "b" => 2,
        "c" => 3,
        "d" => 4,
        "e" => 5,
        "f" => 6,
        "g" => 7,
        "h" => 8,
        "i" => 9,
        "j" => 10,
        "k" => 11,
        "l" => 12,
        "m" => 13,
        "n" => 14,
        "o" => 15,
        "p" => 16,
        "q" => 17,
        "r" => 18,
        "s" => 19,
        "t" => 20,
        "u" => 21,
        "v" => 22,
        "w" => 23,
        "x" => 24,
        "y" => 25,
        "z" => 26
    );

    public function getScoreForName($name, $position)
    {
        $name = strtolower($name);
        $charList = str_split($name);
        $score = 0;
        for($i = 0; $i < count($charList); $i++){
            $score +=$this->_alphabet[$charList[$i]];
        }
        return $score * $position;
    }

    public function readNameList()
    {
        $data = $this->getDataSources();
        $data = trim($data,'"');
        $names = explode('","',$data);
        $overAllScore = 0;
        sort($names);
        for($i = 0; $i < count($names); $i++){
            $overAllScore += $this->getScoreForName($names[$i], $i+1);
        }
        return $overAllScore;
    }

    public function getDataSources()
    {
        $path = realpath(__DIR__);
        return file_get_contents("$path/Resources/p022_names.txt");
    }
}