<?php

// Function Argumen / Parameter

echo "\nFunction Argumen / Parameter\n";

function Pacar ($nama) {
    echo "Lagi Kangen Nih Sama $nama".PHP_EOL;
}

Pacar("Dliani Albana");

// Default Argument Value

echo "\nDefault Argument Value\n";

function Adek ($name = "Anonymous") {
    echo "Hai $name, Apa Kabar?".PHP_EOL;
}

// Adek(); // Jika Kita Memanggil Tanpa Mengisi Parameter, Anonymous Yang Akan Ditampilkan
Adek("Cemplok"); // Akan Ditampilkan


// Kesalahan Default Argument Value

echo "\nCode Kesalahan Default Argument Value\n";

function Mbak ($NamaDepan, $NamaBelakang = "") {
    echo "Hai $NamaDepan $NamaBelakang, Apa Kabar?".PHP_EOL;
}
Mbak("Yaslia"); // Masuk Ke Parameter 1 
Mbak("Miftakhul"); // Masuk Ke Parameter 1 
Mbak("Yaslia","Miftakhul");

// Valid Types

/*

Class / Interface   Parameter Harus Tipe Class
self                Parameter Harus Sama Dengan Class Dimana Function Ini Dibuat
array               Parameter Harus Array
callable            Parameter Harus Callable
bool                Parameter Harus Boolean
float               Paameter Harus Floating Point
int                 Parameter Harus Integer Number
String              Parameter Harus String
Interable           Parameter Harus Array Atau Tipe Traversable
Object              Parameter Harus Sebuah Object

*/

// Contoh Codenya

echo "\nCode Valid Types\n";

function Penjumlahan (int $angka1, int $angka2) {
    $total = $angka1 + $angka2;
    echo "Total Dari $angka1 + $angka2 = $total" . PHP_EOL;
}

Penjumlahan(60, 40);
Penjumlahan("60", "40");

// NB : PHP Akan Otomatis Mengkonversi Tipe Data


// Variablle - Length Argument List | Parameter Yang Menerima Banyak Value

// Code Variablle - Length Argument List

echo "\nCode Variablle - Length Argument List\n";

function JumlahSemua (...$nilai) {
    $jumlah = 0;
    foreach ($nilai as $value) {
        $jumlah += $value;
    }
    echo "Total " . implode(" + ", $nilai) . " = $jumlah" . PHP_EOL;
}

JumlahSemua(20, 30, 40, 50);
