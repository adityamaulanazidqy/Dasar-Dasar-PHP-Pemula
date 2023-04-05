<?php

function Penjumlahan(int $angka1, int $angka2): int {
    $total = $angka1 + $angka2;
    return $total;
}

$result = Penjumlahan(40, 60);
var_dump($result);
// NB : ( : int ) Untuk Mengetahui Tipe Data Kembaliannya, Maka Kita Harus Mengisinya dengan int

// Code Function Return Value

function Penilaian (int $nilai): string {
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups..." . PHP_EOL;

}

$score = Penilaian(85);
var_dump($score);

// NB : ( : string ) Untuk Mengetahui Tipe Data Kembaliannya, Maka Kita Harus Mengisinya dengan String
