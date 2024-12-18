<?php
 class Person
 {

    const AUTHOR = "Hadiiii";
    
    var string $name;
    var ?string $address = null; // agar properties string address ini bisa null maka diberi tnda ? sebelum tipe data yang akan digunakan (var ?string $address = null;)
    var string $country = "Indonesia"; // agar default nya Indonesia

    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello (?string $name)
    {
        if(is_null($name)){
            echo "Hi my name is $this->name" . PHP_EOL;
        }else {
            echo "Hi $name , my name is $this->name" . PHP_EOL;
        }
    }

    function info ()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
        //karena function info berada di dalam class yang sama dengan constant author 
        // maka caramengaksesnya bukan Person::AUTHOR tetapi menggunakan self 
    }

    function __destruct(){
        echo "Object person $this->name is destroyed". PHP_EOL;
    }

 }