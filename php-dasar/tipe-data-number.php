<?php 
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1a);

echo "Binary : ";
var_dump(0b11111111);

echo "Underscore in number : "; // underscore pada nomor akan ketika dicompile maka sifatnya akan diignore / diabaikan fungsinya hanya untuk memudahkan membaca di kode eeditor
var_dump(1_234_456);

echo "Floating point : "; 
var_dump(1.234); //tanda titik ketika dicompile maka akan menjadi koma

echo "Floating point dengan E notation plus (1.2 x 1000) : "; 
var_dump(1.2e3); 

echo "Floating point dengan E notation minus (7 x 0.001) : "; 
var_dump(7e-3); 

echo "Floating point : "; 
var_dump(1.234); 

echo "Underscore in Floating point : "; 
var_dump(1_234.567); 

echo "Integer overflow : "; 
var_dump(9223372036854775807); 
//Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
//Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point



