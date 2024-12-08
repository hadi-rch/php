<?php 


function sum(int $first, int $second){
    $total = $first + $second;
    echo "Total $first + $second = $total" . PHP_EOL;
};

sum ("100", "100");
sum(100,100);
sum(true, false);
// sum([],[]);

//
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    };
    echo "Total " . implode(", ", $values) . " = $total " . PHP_EOL;
}

$valuesArray= [1,2,3,4,5,6,7,8];
sumAll(1,2,3,4,5,6,7,8,9,10);
sumAll(...$valuesArray);