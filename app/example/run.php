<?php

/*
 * In OOP world polymorphism is a very simplistic translation means same name, different logic.
 *  This word consists of two greek words: polys which means “many” and morph which means form or shape. In most cases,
 *  when we replace conditional with polymorphism,
 *  we deal with a subtype polymorphism.
 * This type of polymorphism in OOP means the ability to change the behavior of the method by providing a method with the same name in a child class.
 */
use App\example\Square;
use App\example\Triangle;

$square = new Square(4);
echo $square->getArea(); // 4

$triangle = new Triangle(2,4);
echo $triangle->getArea(); // 4
