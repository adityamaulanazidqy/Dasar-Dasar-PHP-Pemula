<?php

// Sintak Perulangan For

/*
    for(init statement; Kondisi; Post Statement) {
        //Block Perulangan
    }
*/

// Kode Perulangan Tanpa Henti

// for (; ;) { //Init Statement, kondisi, post statement tidak di isi
//     echo "Selamat Pagi Sobat!".PHP_EOL;
// }

// Perulangan Dengan Kondisi

$uang = 5;
echo "\nPerulangan Dengan Kondisi" . PHP_EOL;
echo "-------------------------".PHP_EOL;
for (; $uang <= 9;) {
    echo "Uangmu Masih : ".$uang." Mintalah Lagi Ke Ortumu".PHP_EOL;
    $uang++;
} if ($uang = 10) {
    echo "Uangmu Sudah " . $uang ." Cukup Untuk Membeli Bakso Jumbo". PHP_EOL;
}

// Kode Perulangan Init Statement

echo "\nKode Perulangan Init Statement".PHP_EOL;
echo "------------------------------".PHP_EOL;
for ($money = 4; $money <= 9;) {
    echo "Uang Dari Ibuku : " . $money . PHP_EOL;
    $money++;
} if ($money = 9) {
    echo "Uangmu Sudah " . $money . " Cukup Untuk Membeli Bakso" . PHP_EOL;
}

// Kode Perulangan Dengan Post Statement

echo "\nKode Perulangan Dengan Post Statement".PHP_EOL;
echo "---------------------------------------".PHP_EOL;
for ($money = 4; $money <= 9;$money++) {
    echo "Uang Dari Ibuku : " . $money . PHP_EOL;
} if ($money = 9) {
    echo "Uangmu Sudah " . $money . " Cukup Untuk Membeli Bakso" . PHP_EOL;
}