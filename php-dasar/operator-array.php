<?php  
$first = [
    "first_name" => "hadi",
];

$last = [
    "last_name" => "xxxxx",
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "hadi",
    "last_name" => "xxxxx",
];

$b = [
    "last_name" => "xxxxx",
    "first_name" => "hadi",
];

var_dump($a == $b);
var_dump($a === $b);


