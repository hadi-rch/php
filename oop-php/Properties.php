<?php

require_once "data/Person.php";

$person = new Person();
// var_dump($person);
$person->name = 'John';
$person->address = "Subang";
$person->country = "INDONESIA";

var_dump($person);

echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;

$person2 = new Person();
// var_dump($person2);
$person2->name = 'budi';
$person2->address = "Jkt";
$person2->country = "INDONESIA";