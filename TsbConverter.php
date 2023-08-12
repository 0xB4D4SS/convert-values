<?php
namespace base\convertValues;

class TsbConverter extends AbstractConverter
{
    private $data = [
//        data in tsb
        'rub'
    ];
    public function handle(string $valueType1, string $valueType2, float $value)
    {
        if (in_array($valueType1, $this->data)) {
            return 'data from tsb';
        } else {
            return parent::handle($valueType1, $valueType2, $value);
        }
    }

}