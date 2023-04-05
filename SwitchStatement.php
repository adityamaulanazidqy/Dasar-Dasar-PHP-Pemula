<?php

$nama   = "Aditya";
$nilai  = 90;
if ($nilai >= 90) {
    $nilai = "A";
} elseif ($nilai >= 80) {
    $nilai = "B";
} elseif ($nilai >= 60) {
    $nilai = "C";
} else {
    $nilai = "D";
}

switch ($nilai) {
    case "A":
        echo "Anda Lulus Dengan Nilai Sangat Bagus $nama".PHP_EOL;
        break;
    case "B":
        echo "Anda Lulus Dengan Nilai Bagus $nama".PHP_EOL;
        break;
    case "C":
        echo "Anda Lulus Dengan Nilai Kurang Bagus $nama".PHP_EOL;
        break;
    case "D":
        echo "Anda Lulus Dengan Nilai Buruk, Belajarlah Lagi $nama".PHP_EOL;
        break;
    default:
        echo "Kelihatannya Anda Salah Jurusan $nama";
}