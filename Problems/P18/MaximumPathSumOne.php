<?php
namespace Problems\P18;
class MaximumPathSumOne extends \Library\Timer{

    protected $_numbers = array(
        array('75'),
        array('95','64'),
        array('17','47','82'),
        array('18','35','87','10'),
        array('20','04','82','47','65'),
        array('19','01','23','75','03','34'),
        array('88','02','77','73','07','63','67'),
        array('99','65','04','28','06','16','70','92'),
        array('41','41','26','56','83','40','80','70','33'),
        array('41','48','72','33','47','32','37','16','94','29'),
        array('53','71','44','65','25','43','91','52','97','51','14'),
        array('70','11','33','28','77','73','17','78','39','68','17','57'),
        array('91','71','52','38','17','14','91','43','58','50','27','29','48'),
        array('63','66','04','68','89','53','67','30','73','16','69','87','40','31'),
        array('04','62','98','27','23','09','70','98','73','93','38','53','60','04','23')
    );

    protected $_demoNumbers = array(
        array('3'),
        array('7','4'),
        array('2','4','6'),
        array('8','5','9','3')
    );
    
    public function sumPath($useDemoData = true)
    {
        if($useDemoData) {
            $numbers = $this->_demoNumbers;
        }else{
            $numbers = $this->_numbers;
        }
        for($i = count($numbers) -2 ; $i > 0; $i--){
            for ($j = 0; $j <= $i; $j++) {
                $numbers[$i][$j] += max($numbers[$i+1][$j], $numbers[$i+1][$j+1]);

            }
        }
        return ($numbers[0][0] + max($numbers[1]));
    }
}