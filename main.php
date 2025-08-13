<?php
class Car {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

$myCar = new Car("red");
echo "The color of my car is: " . $myCar->getColor();
?>