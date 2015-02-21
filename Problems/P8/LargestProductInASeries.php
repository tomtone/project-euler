<?php
namespace Problems\P8;
class LargestProductInASeries extends \Library\Timer{

    public function calculateLargetProduct($adjacent)
    {
        $path = realpath(__DIR__);
        $data = file_get_contents("$path/../../Resources/Problem8.txt");

        $lastProduct = 0;
        $j = -(strlen($data) - $adjacent);
        for($i = 0; $i <= (1000-$adjacent); $i++){
            $currentProduct = 1;
            $digitArray = str_split(substr($data, $i,$j));
            foreach($digitArray as $digit){
                $currentProduct = $currentProduct * $digit;
            }
            if($currentProduct > $lastProduct){
                $lastProduct = $currentProduct;
            }
            $j += 1;
        }
        return $lastProduct;
    }
}