<?php

// Contoh Array Function

/*  Nama Function    |   Keterangan
    array_keys()        Mengambil Semua Keys Milik Array
    array_values()      Mengambil Semua Values Milik Array
    array_map()         Mengubah Semua Data Array Dengan Callback
    sort()              Mengurutkan Array
    rsort()             Mengurutkan Array Terbalik
    shuffle()           Mengubah Posisi Data Di Array Secara Random
*/

// Contoh Kode Array Function

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mapFunction = fn($data) => $data * 2; // 1*2, 2*2, 3*2, Dan Seterusnya
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "Nama Depan" => "Aditya",
    "Nama Tengah" => "Maulana",
    "Nama Belakang" => "Zidqy"
];

var_dump(array_keys($person));
var_dump(array_values($person));