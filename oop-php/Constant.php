<?php

require_once "data/Person.php";

define("APPLICATION","BELAJAR PHP OOP");
const APP_VERSION = "1.0.0"; 

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL; //cara mengakses constant di dalam class (namaclass::namaconstant )

