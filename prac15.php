<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$numbers = array(12,23,45,20,5,1025,6,34,17,9000,56,999);

$final = 0;
foreach($numbers as $val){
    if($final < $val){
        $final = $val;
    }
}
echo $final;
?>