<?php
namespace base\convertValues;

class CacheConverter extends AbstractConverter
{
    private $data = [
//        data in cache
        'usd'
    ];
    public function handle(string $valueType1, string $valueType2, float $value)
    {
        if (in_array($valueType1, $this->data)) {
            return 'data from cache';
        } else {
            return parent::handle($valueType1, $valueType2, $value);
        }
    }
}