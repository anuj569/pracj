<?php
$info = file_get_contents('data/rawdata.txt');
$arr = explode("\n",$info);
print_r($arr);
?>

