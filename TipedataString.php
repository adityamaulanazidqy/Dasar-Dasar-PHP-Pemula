<?php

echo "\nNama : ";
echo "Aditya Maulana Zidqy ";
echo "\n";

echo "Umur : ";
echo "16 Tahun";
echo "\n\n";

// Multiline String Ada 2

// 1. Heredoc
echo <<<Teks
Ini Adalah Cara Untuk Membuat Teks 
Langsung Kebawah Tanpa Memakai Garis
Miring N Lagi , Trick Ini Bernama
Heredoc.


Teks;
// 'Teks' Adalah Nama Tag

// 2. Nowdoc
echo <<<'Zidqy'
Saya Bernama Aditya Maulana Zidqy.
Rumah Saya Di Jalan Sidoarjo Wonoayu
Kabupaten Sidoarjo.
Zidqy;
// Nowdoc Tidak Bisa Parsing Variabel
// Nowdoc Diumpamakan Text Yang Berkutip 1

?>