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


//
$firstName="Eko";
$lastName= "Khannedy";

// $sayHelloEko = function () {
//     echo "Hello $firstName $lastName" . PHP_EOL; //variable firstName & lastName tidak bisa diakses karena
// };                                              // berada diluar anonymous function
// $sayHelloEko();                                 //supaya bisa diakses tambahkan use ($namavariable, $namavariable)

$sayHelloEko = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL; 
};                                              
$sayHelloEko();
