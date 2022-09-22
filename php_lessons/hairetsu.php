<?php

// 配列
// key value

// $sales = array (
//     "nissho" => 200,
//     "mitaka" => 800,
//     "hosoya" => 600,
// );

// PHP5.4

$sales = [
    "nissho" => 200,
    "mitaka" => 800,
    "hosoya" => 600,
];

var_dump($sales["mitaka"]); // 800
$sales["mitaka"] = 900;
var_dump($sales["mitaka"]); // 900

$colors = ["red","blue","pink"];
var_dump($colors[1]); //blue
 ?>
