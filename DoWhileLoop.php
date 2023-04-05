<?php

// Minimal Pasti Sekali Perulangan Dilakukan Walaupun Kondisi Tidak Bernilai True

$uang = 100;

do {
    echo "Hei Uangmu Sudah : " . $uang . PHP_EOL;
    $uang++;
} while ($uang <= 300);

if ($uang = 300) {
    echo "Yuk Beli PC Gaming";
}