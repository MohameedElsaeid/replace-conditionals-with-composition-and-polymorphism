<?php

namespace App\example;


/**
 * Class Triangle
 * @package App\Http\Controllers\example
 */
class Triangle extends Shape
{
    /**
     * @var float|null
     */
    protected ?float $height;
    /**
     * @var float|null
     */
    protected ?float $base;

    /**
     * Triangle constructor.
     * @param float|null $height
     * @param float|null $base
     */
    public function __construct(?float $height, ?float $base)
    {
        $this->base = $base;
        $this->height = $height;
    }

    /**
     * @return float|null
     */
    final public function getArea(): ?float
    {
        return $this->height * $this->base / 2;
    }
}
