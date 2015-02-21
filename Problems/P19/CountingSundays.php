<?php
namespace Problems\P19;
class CountingSundays extends \Library\Timer
{

    public function getSundays($start, $end)
    {
        $amount = 0;
        for ($year = 1901; $year <= 2000; $year++) {
            for ($month = 1; $month <= 12; $month++) {
                $date = new \DateTime("$year-$month-01");
                if($date->format('D') == 'Sun'){
                    $amount++;
                }

            }
        }
        return $amount;
    }
}