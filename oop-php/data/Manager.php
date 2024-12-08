<?php 

class Manager{

    var string $name;

    function sayHello (string $name):void //void adalah function yg tidak mengembalikan value.
    {
        echo "Hi $name, y name is $this->name " . PHP_EOL;
    }

}

class VicePresident extends Manager {

}