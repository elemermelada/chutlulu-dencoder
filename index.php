<?php

$out = Array();
exec("./a.out 1 65 66 67", $out);
var_dump($out);