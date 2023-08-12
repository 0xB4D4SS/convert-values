<?php
namespace base\convertValues;

//use base\convertValues\Converter;
//use base\convertValues\AbstractConverter;
//use base\convertValues\CacheConverter;
//use base\convertValues\DbConverter;
//use base\convertValues\TsbConverter;
require_once 'Converter.php';
require_once 'AbstractConverter.php';
require_once 'CacheConverter.php';
require_once 'DbConverter.php';
require_once 'TsbConverter.php';

class Main
{
    public Converter $cache;
    public Converter $db;
    public Converter $tsb;
    public array $vals;

    public function __construct()
    {
        $this->cache = new CacheConverter();
        $this->db = new DbConverter();
        $this->tsb = new TsbConverter();
        $this->vals = ['eur', 'rub', 'usd', 'lol'];
        $this->cache->setNext($this->db)->setNext($this->tsb);
    }

    public function doStuff(Converter $converter, array $data)
    {
        foreach ($data as $val) {
            $res = $converter->handle($val, 'none', 1.11);
            if ($res) {
                echo $val . ' was found in ' . $res . PHP_EOL;
            } else {
                echo 'no data found for ' . $val;
            }
        }
    }
}
$main = new Main();
$main->doStuff($main->cache, $main->vals);

