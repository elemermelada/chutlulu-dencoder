<?php
$encrypt = $_GET["mode"];
$content = file_get_contents("php://input");
$decoded = json_decode($content, true);
$str = $decoded["input"];

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