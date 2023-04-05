<?php

// Kode Arrow Function

$namaDepan      = "Aditya";
$namaBelakang   = "Maulana Zidqy";

$sayHelloZidqy = fn() => "Hello $namaDepan $namaBelakang" . PHP_EOL;

echo $sayHelloZidqy();