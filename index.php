<?php
$str = "ABC";

foreach (mb_str_split($str) as $ch) {
    echo mb_ord($ch);
} 

$out = Array();
exec("./a.out 1 65 66 67", $out);
var_dump($out);