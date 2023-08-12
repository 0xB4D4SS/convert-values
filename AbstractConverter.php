<?php
namespace base\convertValues;

abstract class AbstractConverter implements Converter
{
    private $nextConverter;

    public function setNext(Converter $converter): Converter
    {
        $this->nextConverter = $converter;

        return $converter;
    }

    public function handle(string $valueType1, string $valueType2, float $value)
    {
        if ($this->nextConverter) {
            return $this->nextConverter->handle($valueType1, $valueType2, $value);
        }

        return null;
    }

}