<?php
namespace base\convertValues;

class DbConverter extends AbstractConverter
{
    private $data = [
//        data in db
        'eur'
    ];

    public function handle(string $valueType1, string $valueType2, float $value)
    {
        if (in_array($valueType1, $this->data)) {
            return 'data from db';
        } else {
            return parent::handle($valueType1, $valueType2, $value);
        }
    }

}