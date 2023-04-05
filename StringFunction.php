<?php

// Contoh Sring Function

/*  Nama Function    |   Keterangan
    join()/implode()    Menggabungkan Array Menjadi String
    Explode()           Memecah String Menjadi Array
    strlower()          Sudah Tau
    strupper()          Sudah Tau
    substr()            Mengambil Sebagian String
    trim()              Menghapus Whitespace Di depan dan Belakang String
*/

var_dump(join(",",[1, 2, 3, 4, 5])); // Menggabungkan Array
var_dump(explode(" ", "Aditya Maulana Zidqy")); // Dipecah Setiap Kalimat
var_dump(trim("     Aditya      ")); // Menghapus Tab
var_dump(substr("Aditya Maulana Zidqy", 0, 6)); // 0 & 6 Adalah Jumlah Huruf Yang Saya Pilih Index Ke 0 - 6