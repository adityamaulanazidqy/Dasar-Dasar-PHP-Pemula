<?php

/*  Sytax If Statement

if (expression)
    statement;

Jika Statement Lebih Dari 1

if (expression) {
    statement1;
    statement2;
}
*/

// Contohnya

$nama   = "Zidny";   
$nilai  = 70;
$absensi = 90;

if ($nilai >= 75 && $absensi >= 75) {
    echo "Selamat Anda Lulus $nama".PHP_EOL;
} elseif ($nilai >= 50 && $absensi >= 50) {
    echo "Belajarlah Lebih Giat Lagi $nama" . PHP_EOL;
} else {
    echo "Selamat Mencoba Kembali $nama" . PHP_EOL;
}

/* Bisa Menggunakan Logika Seperti Ini

if ($nilai >= 75 && $absensi >= 75) :
    echo "Selamat Anda Lulus $nama".PHP_EOL;
elseif ($nilai >= 50 && $absensi >= 50) :
    echo "Belajarlah Lebih Giat Lagi $nama" . PHP_EOL;
else :
    echo "Selamat Mencoba Kembali $nama" . PHP_EOL;
endif;
*/