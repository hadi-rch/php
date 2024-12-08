<?php 
echo 'materi : ';
echo 'Single quote';

// Selain single quote, kita juga bisa menggunakan double quote. 
// Salah satu kelebihan menggunakan double quote adalah, 
// kita menggunakan escape sequence untuk beberapa hal, 
// seperti \n untuk ENTER \t untuk TAB, \” untuk double quote, dan lain-lain
echo "\n";
echo "Name : ";
echo "Hadi\t aaaaaa\t aaaassss\n";

// MULTILINE String
// Kadang kita ingin membuat data string yang lebih dari satu baris. 
//Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER
// Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc

// Heredoc adalah fitur untuk membuat String yang panjang, 
// sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual
echo <<<HADI
ini adalah contoh string yang sangat 
panjang, dan juga gk perlu ngetik ENTER secara 
manual, bisa "qoute juga heredoc"

HADI;

echo <<<'HADI'
ini adalah contoh string yang sangat 
panjang, dan juga gk perlu ngetik ENTER secara 
manual, bisa "qoute juga nowdoc"
HADI;


