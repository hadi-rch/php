<?php

require_once "data/Person.php";

$eko = new Person("Jhone","pmk");
$eko->name = 'John';
// var_dump($eko);
$eko->sayHello("Budi");

$joko = new Person("markus","sukasari");
$joko->name = 'jokk';
// var_dump($joko);
$joko->sayHello(null);


$joko->info();
$eko->info();


