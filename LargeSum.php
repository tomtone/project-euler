<?php
class LargeSum{

    public function getSum()
    {
        $numbers = $this->getDataSources();
        $lines = explode("\r\n", $numbers);
        $sum = 0;
        foreach($lines as $number) {
            $sum += $number;
        }
        $sum = substr($sum, 0, 11);
        $sum = str_replace('.','',$sum);
        return $sum;
    }

    public function getDataSources()
    {
        $path = realpath(__DIR__);
        return file_get_contents("$path/Resources/Problem13.txt");
    }
}