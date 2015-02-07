<?php
class LargestProductInAGrid{
    public function getLargestProductForFourAdjacent(){
        $data = $this->getDataSources();
        $lines = explode("\r\n", $data);
        $numbersArray = array();
        foreach($lines as $key => $line){
            $numbersArray[$key] = explode(' ',$line);
        }
        $results = array();
        for($column = 0; $column < count($numbersArray)-4; $column++){
            for($row = 0; $row < count($numbersArray[0])-4; $row++){

                $results[] = @($numbersArray[$column - 3][$row - 3] * $numbersArray[$column - 2][$row - 2] * $numbersArray[$column - 1][$row - 1] * $numbersArray[$column][$row]);
                $results[] = @($numbersArray[$column - 3][$row] * $numbersArray[$column - 2][$row] * $numbersArray[$column - 1][$row] * $numbersArray[$column][$row]);
                $results[] = @($numbersArray[$column - 3][$row + 3] * $numbersArray[$column - 2][$row + 2] * $numbersArray[$column - 1][$row + 1] * $numbersArray[$column][$row]);

                $results[] = @($numbersArray[$column][$row - 3] * $numbersArray[$column][$row - 2] * $numbersArray[$column][$row - 1] * $numbersArray[$column][$row]);
                $results[] = @($numbersArray[$column][$row + 3] * $numbersArray[$column][$row + 2] * $numbersArray[$column][$row + 1] * $numbersArray[$column][$row]);

                $results[] = @($numbersArray[$column + 3][$row - 3] * $numbersArray[$column + 2][$row - 2] * $numbersArray[$column + 1][$row - 1] * $numbersArray[$column][$row]);
                $results[] = @($numbersArray[$column + 3][$row] * $numbersArray[$column + 2][$row] * $numbersArray[$column + 1][$row] * $numbersArray[$column][$row]);
                $results[] = @($numbersArray[$column + 3][$row + 3] * $numbersArray[$column + 2][$row + 2] * $numbersArray[$column + 1][$row + 1] * $numbersArray[$column][$row]);
            }

        }
        return max($results);
    }

    public function getDataSources()
    {
        $path = realpath(__DIR__);
        return file_get_contents("$path/Resources/Problem11.txt");
    }
}