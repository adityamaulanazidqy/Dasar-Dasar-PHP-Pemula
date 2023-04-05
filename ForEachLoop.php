<?php


// Tanpa For Each
$makan = ["Rujak Cingur","Bakso","Lontong Kupang"];

for ($i = 0; $i < count($makan); $i++) { // Count Untuk Menjumlah Semua Nilai Array Yang Ada Di $makan 
    echo "Data Makanan Ke $i : $makan[$i]". PHP_EOL;
}

// Dengan For Each
$names = ["Zidny", "Zidqy", "Akbar"];

foreach ($names as $name) {
    echo "Hello $name Apa kabar" . PHP_EOL;
} 

/* Arti :
            - Computer, Buatlah Variabel Names Yang Menyimpan Nilai Array.
            - Computer, Dari Variabel Names Tolong Ambil Nilai Arraynya Satu Per Satu Dan
              Beri Nilai Tersebut Ke Variabel Baru Yakni Name, Lalu Cetak Kalimat Berikut.
*/

// Kode For Each Dengan Key

$biodata = [
    "Nama Depan" => "Aditya",
    "Nama Tengah" => "Maulana",
    "Nama Belakang" => "Zidqy"
];

foreach ($biodata as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}