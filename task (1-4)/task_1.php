<?php

// Define an abstract class
abstract class Shape {
    // Abstract method for calculating area
    abstract public function area();
}

//  Circle class  that extends Shape
class Circle extends Shape {
    private $radius;

    //  initialize the radius for Contstructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // calculate the area of the circle
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

//  Rectangle class that extends Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    //  initialize width and height for Constructor 
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    //  Calculate the area of the rectangle
    public function area() {
        return $this->width * $this->height;
    }
}

// Example usage:

//  a Circle object with radius 3
$circle = new Circle(3);
echo "Circle area: " . $circle->area() . "\n"; 


// Rectangle object with width  and height 
$rectangle = new Rectangle(4, 6);
echo "Rectangle area: " . $rectangle->area() . "\n"; 

?>
