<?php

use App\example\Square;
use App\example\Triangle;

$square = new Square(4);
echo $square->getArea(); // 4

$triangle = new Triangle(2,4);
echo $triangle->getArea(); // 4
