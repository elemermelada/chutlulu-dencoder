<?php
$encrypt = "1";
$command = "./a.out ". $encrypt . " ";

$str = "ABC";
foreach (mb_str_split($str) as $ch) {
    $command .= mb_ord($ch) . " ";
} 

$out = Array();
exec($command, $out);
var_dump($out);