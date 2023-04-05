<?php

goto a; // Akan Meloncat Ke Baris Ke 6
// echo "Hai A" . PHP_EOL; // Kode Ini Tidak Akan Dieksekusi

a:
echo "Hello A" . PHP_EOL;

// Goto Operator Di Loop

$uang = 1;

while (true) {
    echo "While Loop Ke : " . $uang . PHP_EOL;
    $uang++;
    if ($uang > 10) {
        goto end;
    }
}

end:
echo "Loop Telah Selesai";