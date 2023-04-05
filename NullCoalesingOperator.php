<?php


// Tanpa Null Coalsing Operator
// $data = [
//     "action" => "Create"
// ];

// if (isset($data["action"])) {
//     $action = $data["action"];  //Jika Data Ada
// } else {
//     $action = "Nothing";    //Jika Data Tidak Ada
// }

// echo $action.PHP_EOL;

//Dengan Null Coalesing Operator
$data = [];
$action = $data['action'] ?? 'Nothing';

echo $action;