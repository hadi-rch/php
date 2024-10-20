<?php 
function sum(int $first, int $second){
    return $first + $second;
};

$total = sum(10,10);
var_dump($total);

$total = sum(20,20);
var_dump($total);

//
function getFInalValue(int $value){
    if($value >= 80){
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "E";
    }
};
$new = getFInalValue(89);
var_dump($new);