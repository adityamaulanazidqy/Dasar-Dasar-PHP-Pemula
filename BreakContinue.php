<?php

$uang = 1;

// Kode Break
echo "Kode While Break\n";
while (true) {
    echo "Baris Break Ke : " . $uang . PHP_EOL;
    $uang++;

    if ($uang > 10) {
        echo "Baris Sudah Limit Kawan";
        break;
    }
}

echo "\nKode For Continue\n";
for ($money = 0; $money <= 10; $money++) {
    if ($money % 2 == 0) {
        continue;
    }
    echo $money . " Termasuk Nilai Ganjil" . PHP_EOL;
}