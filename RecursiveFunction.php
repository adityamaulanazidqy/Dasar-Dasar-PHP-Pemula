<?php


// Menggunakan Factorial Loop
// function FactorialLoop (int $value): int {
//     $total = 1;

//     for ($i = 1; $i <= $value; $i++) {
//         $total *= $i;
//     }

//     return $total;
// }

// var_dump(FactorialLoop(6));
// var_dump(1 * 2 * 3 * 4 * 5 * 6);

// Menggunakan Factorial Recursive  |   Memanggil Dirinya Sendiri

function FactorialRecursive (int $value): int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * FactorialRecursive($value - 1); // 6 * (6 - 1) = 30 (Akan Menjadi Nilai Baru $value)
    }
}

var_dump(FactorialRecursive(6));

// Error StackOverflow
function loop (int $isi){
    if ($isi == 0){
        echo "Selesai" . PHP_EOL;
    } else {
        echo "Loop-$isi" . PHP_EOL;
        loop($isi - 1);
    }
}

loop(10);

// nb : Value Dari Isi Tidak Boleh Terlalu Banyak