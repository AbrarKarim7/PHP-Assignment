<?php
// Base class Shape
abstract class Shape {
    // Abstract method for area calculation
    abstract public function calculateArea();
}

// Circle class inheriting from Shape
class Circle extends Shape {
    private $radius;

    // Constructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Method to calculate the area of the circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class inheriting from Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Method to calculate the area of the rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5);
echo "Area of Circle: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 6);
echo "Area of Rectangle: " . $rectangle->calculateArea() . "\n";
?>
