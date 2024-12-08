<?php

require_once "data/Person.php";

$person = new Person("robs","saa");
// var_dump($person);
$person->name = 'John';
$person->address = "Subang";
$person->country = "INDONESIA";

echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;
