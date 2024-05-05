<?php
$encrypt = $_GET["mode"];
$str = $_GET["input"];

$command = "./a.out ". $encrypt . " ";
foreach (mb_str_split($str) as $ch) {
    $command .= mb_ord($ch) . " ";
} 

$out = Array();
exec($command, $out);
var_dump($out);