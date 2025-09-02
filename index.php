<?php

$array = array(1, 2, 3, 4, 5);
$array = [1, 2, 3, 4, 5];
$array = [
    1, 
    'hello', 
    true, 
    null, 
    [1, 2, 3]
];
$array = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];
$array = [
    1,
    2,
    3,
    'name' => 'John',
    88,
    'age' => 30,
    1000=> 3,
    'city' => 'New York',
    4,
    5,
];
var_dump($array['name']);
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
var_dump($array[1][2]);
$array = [1, 2, 3];
array_push($array, 4);
array_push($array, 5, 6, 7);
$array[] = 8;
var_dump($array);