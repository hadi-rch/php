<?php 
$values = array(9,8,7,6.5);
var_dump($values);

$names = ["EKO", "KURNIAWAN", "KHANNEDY"];
var_dump($names);

var_dump($names[0]);

$names[1]= "KUR"; //untuk mengganti value array
var_dump($names);

// unset($names[1]); //unset untuk menghapus array sekaligus nomor INDEX nya
// var_dump($names);

$names[]= "joko"; //untuk menambah value array ke index terakhir ? belakang
var_dump($names);

var_dump(count($names)); //mengambil total data array


$hadi = array(
    "id" => "hadii",
    "name"=> "haddii",
    "age"=> "25",
    "address"=> array(
        "city"=> "jkt",
        "country"=> "idn",
    )
);
var_dump($hadi);
var_dump($hadi["id"]);

$budi = [
    "id" => "budii",
    "name"=> "buaddii",
    "age"=> "28",
    "address"=> [
        "city"=> "jkt",
        "country"=> "idn",
    ]
];
var_dump($budi);
var_dump($budi["id"]);
var_dump($budi["address"]["country"]);