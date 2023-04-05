<?php

$name = "Aditya Maulana Zidqy";
$umur = 16;

echo "Nama  : " . $name.PHP_EOL;
echo "Umur  : " . $umur.PHP_EOL;

// Konversi Ke Number Dan Sebaliknya

$ValueString = (string) 100;
var_dump($ValueString);

$ValueInt = (int) "100";
var_dump($ValueInt);

$ValueFloat = (Float) "10.75";
var_dump($ValueFloat);

// Mengakses Per Huruf

$pacar = "Ani";
// Pemanggilan
echo $pacar[0] . PHP_EOL;
echo $pacar[1] . PHP_EOL;
echo $pacar[2] . PHP_EOL;
// Jika Pemanggilan Index Melebihi, Akan Error


// Contoh Variabel Pharsing

$sayank = "Dliani Albana";
echo "Kangen Banget Ama $sayank , Bruhh Sabar...".PHP_EOL;

// Contoh Curly Brace | Penggabungan Variabel Tanpa Spasi
echo "Kangen Banget Ama {$sayank}t , Bruhh Sabar...".PHP_EOL;
