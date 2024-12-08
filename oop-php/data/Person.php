<?php
 

 class Person
 {

    const AUTHOR = "Hadiiii";
    
    var string $name;
    var ?string $address = null; // agar properties string address ini bisa null maka diberi tnda ? sebelum tipe data yang akan digunakan (var ?string $address = null;)
    var string $country = "Indonesia"; // agar default nya Indonesia

    function sayHello (?string $name)
    {
        if(is_null($name)){
            echo "Hi my name is $this->name" . PHP_EOL;
        }else {
            echo "Hi $name , my name is $this->name" . PHP_EOL;
        }
    }


 }