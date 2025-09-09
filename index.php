<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function __construct($w, $h, $l) {
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}

$box1 = new Box(10, 20, 15);

var_dump($box1);
var_dump($box1->volume());

$box2 = new Box(4, 5, 6);

var_dump($box2);
var_dump($box2->volume());