<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$input = $_GET['txt'];
echo "<BR>$input";

//$out = str_replace('Mumbai','pune',$input);
$out = str_ireplace('Mumbai','pune',$input);

echo "<BR>$out";
?>