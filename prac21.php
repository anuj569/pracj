<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$small_case = range('a','z');
//print_r($small_case);

$cap_case = range('A','Z');
//print_r($cap_case);

$num = range(0,9);
//print_r($num);

$final_arr = array_merge($small_case,$cap_case,$num);
//print_r($final_arr);

$random_arr = array_rand($final_arr,8);
//print_r($random_arr);

$password = "";
foreach($random_arr as $val){
    //echo "\n$final_arr[$val]";
    $password = $password . $final_arr[$val];
}

echo "\n$password";
?>