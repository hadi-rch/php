<?php 
$name = "EKO KURNIAWAN KHANNEDY";
echo "Nama : " . $name . PHP_EOL; //PHP_EOL (end of line/adalah constanta) berfungsi untuk meng ENTER
echo "Nilai : " . 100 . "\n";

$valueString =(string)100 ; 
var_dump($valueString);

$valueInteger =(int)"100" ; 
var_dump($valueInteger);

$valueFloat =(float)"1.098" ; 
var_dump($valueFloat);

//MENNGAKSES KARAKTER PADA STRING
$name = "EKO";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;


//VARIABLE PASRSING
$name = "EKO";
echo "Hello $name, selamat belajar" . PHP_EOL;

//curly brace
$name = "Had";
echo "Hello {$name}i, selamat belajar" . PHP_EOL;
