<?php

$nama = "Aditya Maulana Zidqy";
// Mengahpus Nilai Yang Ada Dalam Variabel Nama
$nama = null;
// Mendefinisikan Variabel Umur Yang Tidak Memiliki Nilai
$umur = NULL;


// Pemanggilan
echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";

// Mengecek Apakah Variabel Tersebut Null?
echo "Apakah Variabel Ini Null? : ";
// Var_Dump Untuk Mencetak Bertipe Boolean
var_dump(is_null($nama));
echo "\n";

// Cara Mengahapus Variabel Menggunakan Function Unset
$pacar = "Dliani";
unset($pacar);
// Jika Variabel Pacar DiPanggil Maka Akan Error

// Memperbarui Nilai Yang Ada Didalam Variabel Pacar Yang Variabel Tersebut Sudah Dihapus
$pacar = "Dliani Albana";
// Variabelnya Tidak Bisa Diakses

// Mengecek Apakah Ada Nilai Didalam Variabel Yang Sudah Di Hapus
var_dump(isset($pacar));
// isset Untuk Yang Masih Ragu Variablenya Ada Atau Tidak
?>