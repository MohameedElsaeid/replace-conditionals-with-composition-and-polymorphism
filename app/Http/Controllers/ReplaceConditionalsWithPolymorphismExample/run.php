<?php


use App\Http\Controllers\ReplaceConditionalsWithPolymorphismExample\{Square,Triangle};

$square = new Square(4);
echo $square->getArea(); // 4

$triangle = new Triangle(2,4);
echo $triangle->getArea(); // 4
