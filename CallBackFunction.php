<?php

function sayHello (string $nama, callable $filter) { // Menjadikan $filter Menjadi Function
    $finalName = call_user_func($filter, $nama);    // Pemanggilan function $filter, Menggunakan call_user_func, $nama Termasuk Parameter
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Zidqy", "strtoupper");
sayHello("Zidqy", "strtolower");

sayHello("Zidqy", function ($nama) {
    return strtoupper($nama);       // Memakai Anonymous Function
});

// sayHello("Zidqy", fn($nama) => strtoupper($nama));

