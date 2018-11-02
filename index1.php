<?php
include "Shape.php";
include "index.php";

class Circle extends Shape implements Resizeable
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function resize($percent)
    {
        $this->radius *= $percent / 100;
    }
}
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
    public function resize($percent)
    {
        $this->width *= $percent / 100;
    }
}
class Square extends Rectangle
{
    public function __construct($name, $width, $height)
    {
        parent::__construct($name, $width, $height);
    }
}