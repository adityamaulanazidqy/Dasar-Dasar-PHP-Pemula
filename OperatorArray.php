<?php

/*  Operator Array

$a + $b     Union        Menggabungkan Array $a Dan $b
$a == $b    Equality     True Jika $a Dan $b Memiliki key - value sama
$a === $b   Identity     True Jika $a Dan $b Memiliki key - value sama Dan Posisi Sama
$a != $b    Identity     True Jika $a Dan $b Tidak Sama
$a <> $b    Inequality   True Jika $a Dan $b Tidak Sama
$a !== $b   Nonidentity  True Jika $a Dan $b Tidak Identik

*/


// Operasi Union
$depan = [
    "NamaDepan" => "Aditya"
];

$tengah = [
    "NamaTengah" => "Maulana"
];

$belakang = [
    "NamaBelakang" => "Zidqy"
];

$FullName = $depan + $tengah + $belakang;
var_dump($FullName);

// Contoh Posisi Kedua Array Yang Berbeda
$a = [
    "NamaDepan"    => "Aditya Maulana",
    "NamaBelakang" => "Zidqy"
];

$b = [
    "NamaBelakang" => "Zidqy",
    "NamaDepan"    => "Aditya Maulana"
];
// Contoh Equality
var_dump($a == $b);  // True
// Contoh Identity
var_dump($a === $b); // False