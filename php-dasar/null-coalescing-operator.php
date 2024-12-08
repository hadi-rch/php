<?php 

// $data= [
//     "action" => "create"
// ];

// if (isset($data["action"])){
//     $action=$data["action"];
// }else {
//     $action= "Nothings";
// }

//best practice
$data = [];
$action = $data["action"] ?? "Nothings";

echo $action . PHP_EOL;
