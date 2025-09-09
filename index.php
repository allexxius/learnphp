<?php

class Box {
    private $width;
    protected $height;
    private $length;

    public function __construct($w=0, $h=0, $l=0) {
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        if($width > 0 && is_numeric($width)) {
            $this->width = $width;
        } else {
            throw new Exception("you are stupid dumbass");
        }
    }

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'metal';
    public $massPerUnit = 2;

    public function changeWidth() {
        $this->width = 333;
    }

    public function mass() {
        return $this->volume() * $this->massPerUnit;
    }
}

$metalBox = new MetalBox(10, 20, 15);
//$metalBox->width = 'cool value';
$metalBox->setWidth(100);
// $metalBox->width = 100;
// $metalBox->changeWidth();
// var_dump($metalBox->width);
var_dump($metalBox);
var_dump($metalBox->volume());
var_dump($metalBox->mass());