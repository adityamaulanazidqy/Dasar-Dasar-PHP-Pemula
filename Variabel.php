<?php

$nama = "Aditya Maulana Zidqy";
$umur = 16;
$makanan = "Roti Panggang";
$minuman = "Susu Sapi";

echo "\nHai , Namaku : ";
echo $nama;
echo "\n";

echo "Saya Berumur : ";
echo $umur;
echo "\n";
echo "\n";

echo "Makanan Favorit Saya : ";
echo $makanan;
echo "\n";

echo "Minuman Favorit Saya : ";
echo $minuman;
echo "\n";
echo "\n";

// Membuat Variabel Yang Namanya Diambil Dari Variabel Lain
$contoh = "Aditya";
// Contoh Variable Variables
$$contoh = "Maulana Zidqy";
// Penutup Membuat Variabel Yang Namanya Diambil Dari Variabel Lain

echo "Nama Depan : ";
echo $contoh;
echo "\n";
// Walaupun Variabel Aditya Tidak Pernah Ada Teksnya Tpi Tadi Sudah Dibuat Dengan $$
echo "Nama Belakang : ";
echo $Aditya;
echo "\n";

?>