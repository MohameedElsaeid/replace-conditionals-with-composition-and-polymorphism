<?php

namespace App\example;


/**
 * Class Square
 * @package App\Http\Controllers\example
 */
class Square extends Shape
{
    /**
     * @var float|null
     */
    protected ?float $length;

    /**
     * Square constructor.
     * @param float|null $length
     */
    public function __construct(?float $length)
    {
        $this->length = $length;
    }

    /**
     * @return float|null
     */
    final public function getArea(): ?float
    {
        return $this->length ** 2;
    }
}
