<?php

/*  Variable Scope
Ada 3 Jenis
- Global
- Local
- Static

- Global Scope  : Kita Tidak Bisa Mengakses Variabel Di Luar Function
Contoh : $name = "adit";
        function sayHello (){
            echo $name.PHP_EOL;
        }
NB : Bisa Dipanggil Menggunakan Global Scope :
        $name = "adit";
        function sayHello (){
            global $name;
            echo $name.PHP_EOL;
        }

- Local Scope   : Variabelnya Hanya Bisa Di akses Didalam Function
Contoh : function createName (){
            $nama = "zidqy";
        }
        createName()
        echo $nama;
- Static Scope  :
Contoh  : function increment (){
    static $counter = 1;
    echo "Counter = $counter".PHP_EOL;
    $counter++;
}
*/

echo "\nMenggunakan Global Scope".PHP_EOL;
$name = "adit";
        function sayHello (){
            global $name;
            echo $name.PHP_EOL;
        }

sayHello();

echo "\nMenggunakan Static Scope" . PHP_EOL;
function increment (){
    static $counter = 1;
    echo "Counter = $counter".PHP_EOL;
    $counter++;
}

increment();
increment();
