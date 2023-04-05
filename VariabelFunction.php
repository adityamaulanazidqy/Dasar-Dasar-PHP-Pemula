<?php

//  Variabel Function

function Makanan (){
    echo "Nasi Goreng".PHP_EOL;
}

function Minuman (){
    echo "Es Campur".PHP_EOL;
}

$makan = "Makanan"; // Makanan Merupakan Nama Functionnya
$makan();

$minum = "Minuman"; // Minuman Merupakan Nama Functionnya
$minum();

// Contoh Diatas Merupakan Cara Pemanggilan Fuction Lewat Variabel

// Penggunaan Variabel Function

function sayHello (string $nama, $filter){
    $finalName = $filter($nama);
    echo "Hello $finalName".PHP_EOL;
}

function sampleFunction (string $nama): string {
    return "Sample $nama".PHP_EOL;
}

sayHello("Zidqy", "strtoupper");    // strtoupper | Untuk Membuat Huruf Abjat Besar Semua
sayHello("Zidqy", "strtolower");    // strtolower | Untuk Membuat Huruf Abjact Menjadi Kecil Semua

sayHello("Zidqy", "sampleFunction");