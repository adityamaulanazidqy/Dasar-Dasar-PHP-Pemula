<?php

// Ada 2 Cara Untuk Membuatnya


// 1.
$makanan = array("Nasgor","Roti Bakar" , "Roti Panggang" , "Bakso Beranak" , "Ayam Bakaran");
var_dump($makanan);

// 2.
$minuman = ["Es Buah", "Es Jeruk", "Es Campur"];
var_dump($minuman);

$AngkaIndah = array(2,28 , 7 , 99 , 6);
var_dump($AngkaIndah);


// Operasi Array

/* 
    $array[index] : Mengakses data di array pada nomer index
    $array[index] = value : Mengubah data di array pada nomer index dengan value baru
    $array[]= value : Menambah data di array pada posisi paling belakang
    unset($array[index]) : Menghapus data di array, index otomatis hilang dari array
    count($array) : Mengambil Total Data Di array
*/


// Mengambil Data Makanan Dari Indexnya
var_dump($makanan[3]);

// Mengubah Data di array Pada Nomer Index Dengan Value Baru
$makanan[3] = "Pizza Hut!";
var_dump($makanan[3]);

// Menghapus Data
unset($makanan[4]);
var_dump($makanan);

// Menambah Di Array
$makanan[] = "Roti Lapis";
var_dump($makanan);

// Melihat Total Data Array
var_dump(count($makanan));


// Membuat MAP Dengan Array Ada 2 Cara

// 1.
$zidqy = array(
    "Panggilan" => "Aditya",
    "Name"      => "Aditya Maulana Zidqy",
    "Umur"      => 16,
    "Alamat" => [
        "Kota" => "Sidoarjo",
        "Daerah" => "Sumberejo Rt.05 Rw.01"
    ]
);
// Mengambil Value Dari Key
var_dump($zidqy["Name"]);
var_dump($zidqy["Alamat"]["Kota"]);

// 2.
$dliani = [
    "Panggilan" => "Ani",
    "Name"      => "Dliani Albana",
    "Umur"      => 16,
    "Alamat" => array(
        "Kota" => "Sidoarjo",
        "Daerah" => "Gg. Macan Sumberejo"
    )
];
// Pemanggilannya
var_dump($dliani["Name"]);
var_dump($dliani["Alamat"]["Kota"]);

// Contoh Kode Array Di Dalam Array
$zidny = array(
    "Panggilan" => "Zidny",
    "Name" => "Zidny Isyah",
    "Umur" => 15,
    "Alamat" => [
        "Kota" => "Surabaya",
        "Daerah" => "Jalan IR.Soekarno"
    ]
);
// Pemanggilannya
var_dump($zidny["Name"]);
var_dump($zidny["Alamat"]["Kota"]);