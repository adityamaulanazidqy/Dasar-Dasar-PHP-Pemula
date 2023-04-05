<?php

// $gender = "PRIA";
// $hi = null;

// if ($gender == "PRIA") {
//     $hi = "Hai Bro...";
// } else {
//     $hi = "Hai Nona...";
// }

// echo $hi . PHP_EOL;

//Kode Diatas Bisa Disingkat Dengan Kode Ternary Berikut
// Kode Ternary Operator

$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hai Bro..." : "Hai Nona...";

echo $hi . PHP_EOL;