<?php
$encrypt = $_GET["mode"];
$str = $_POST["input"];

file_put_contents("log.txt", $str);

$command = "./a.out ". $encrypt . " ";
foreach (mb_str_split($str) as $ch) {
    $command .= mb_ord($ch) . " ";
} 

$out = Array();
exec($command, $out);

$result = "";
foreach ($out as $int) {
    $result .= mb_chr($int);
}
echo $result;