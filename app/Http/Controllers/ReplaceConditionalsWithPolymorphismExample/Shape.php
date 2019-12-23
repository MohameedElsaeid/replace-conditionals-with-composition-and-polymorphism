<?php


namespace App\Http\Controllers\ReplaceConditionalsWithPolymorphismExample;


/**
 * Class Shape
 * @package App\Http\Controllers\ReplaceConditionalsWithPolymorphismExample
 */
abstract class Shape
{
    /**
     * @return float|int
     */
    abstract public function getArea(): ?float;
}
