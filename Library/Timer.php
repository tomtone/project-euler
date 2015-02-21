<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 21.02.2015
 * Time: 16:44
 */

namespace Library;

/**
 * Class Timer
 * originally authored by psychomieze
 *
 * @package Library
 */
class Timer {
    protected $startTime;

    public function __construct() {
        $this->startTime = microtime(true);
    }
    public function __destruct() {
        $endTime = microtime(true) - $this->startTime;
        $fh = fopen(__DIR__ . '/../README.md', 'a+');
        fwrite($fh, '|' . str_replace('\\', ' ', str_replace('Problems', '',get_class($this))) . ' | ' . round($endTime, 3) * 1000 . ' ms |' . "\r\n");
        fclose($fh);
    }
}