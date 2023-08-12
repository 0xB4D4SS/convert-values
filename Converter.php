<?php
namespace base\convertValues;

interface Converter
{
    public function setNext(Converter $converter): Converter;

    public function handle(string $valueType1, string $valueType2, float $value);
}