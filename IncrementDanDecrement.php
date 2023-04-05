<?php

/* Operator Increment Dan Decrement

    $a++    post increment  Mengembalikan $a lalu naikkan 1 angka
    ++$a    pre increment   Naikkan $a satu angka, Lalu kembalikan $a
    $a--    post decrement  Kembalikan $a lalu turunkan 1 angka
    --$a    pre decrement   Turunkan $a Satu Angka, Lalu Kembalikam $a
*/

// Memberikan Nilai Yang Awal Ke b Lalu Menambahkan Angka 1 Untuk a
$a = 10;

$b = $a++;

echo "\nPost Increment\n";
var_dump($a);
var_dump($b);

// Menambahkan Angka 1 Dulu Ke a lalu diberikan untuk b
$a = 10;

$b = ++$a;

echo "\nPre Increment\n";
var_dump($a);
var_dump($b);

// Memberikan Nilai Yang Awal Ke b Lalu Megurangi a dengan 1 
$a = 10;

$b = $a--;

echo "\nPost Decrement\n";
var_dump($a);
var_dump($b);

// Mengurangi a dengan 1 Dulu lalu diberikan untuk b
$a = 10;

$b = --$a;

echo "\nPre Decrement\n";
var_dump($a);
var_dump($b);