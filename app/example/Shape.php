<?php


namespace App\example;


/**
 * Class Shape
 * @package App\Http\Controllers\example
 */
abstract class Shape
{
    /**
     * @return float|int
     */
    abstract public function getArea(): ?float;
}
