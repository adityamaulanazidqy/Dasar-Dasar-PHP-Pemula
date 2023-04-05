<?php


// Contoh Anonymous Fuction
$sayHello = function (string $nama) {
    echo "Hello $nama" . PHP_EOL;
};

$sayHello("Adit");
$sayHello("Zidqy");

// Anonymous Fuction Sebagai Argumen

function sayGoodBye (string $nama, $filter){
    $finalName = $filter($nama);
    echo "GoodBye $finalName" . PHP_EOL;
}

sayGoodBye("Zidqy", function (string $nama): string {
    return strtoupper($nama);
});

// Mengakses Variable Di Luar Closure

$namaDepan = "Aditya";
$namaBelakang = "Maulana Zidqy";

$sayHelloZidqy = function () use ($namaDepan, $namaBelakang) {
    echo "Hello $namaDepan $namaBelakang" . PHP_EOL;
};

$sayHelloZidqy();