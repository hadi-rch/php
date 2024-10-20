<?php 

$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("eko");
$sayHello("budi");

//

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Goodbye $finalName" . PHP_EOL;
}

sayGoodBye ("Eko", function (string $name){
    return strtoupper($name);
});

