<?php


// Kode Assisgn By Refrence
$nama = "Aditya";

$namaLain = & $nama; // Variable Nama Akan Meniru Nilai Variabel namaLain
$namaLain = "Zidqy"; // Memperbarui Nilai Variabel namaLain Dan Nama

echo $nama . PHP_EOL;

// Kode Pass By Reference

function increment (int &$isi){
    $isi++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// Returning References

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = & getValue(); // Menyamakan Nilai Variabel a Dengan getValue
$a = 200; // Memberi Nilai Pada Variabel a, Otomatis getValue Juga Dapat

$b = & getValue(); // Memberi Nilai Pada Variabel b Dengan Nilai getValue Yakni 200
echo $b . PHP_EOL;