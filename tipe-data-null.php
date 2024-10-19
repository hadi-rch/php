<?php 
$name = "hadi";
$name = null;
$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
// Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function is_null($variable)

echo "Is NAme null? : ";
var_dump(is_null($name));
echo "\n";

// Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan menggunakan function unset($variable)
// Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
// Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mengeccek apakah sebuah variable ada dan nilainya tidak NULL
$contoh = "hadi : ";
unset($contoh);
// echo $contoh;

var_dump(isset($contoh));

// kesimpulan walaupun ada fitur is_null tapi lebih aman menggunakan isset