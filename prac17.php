<?php
$numbers = array(12,23,45,20,5,1025,6,34,17,9000,56,999);
print_r($numbers);
//sort($numbers);
rsort($numbers);
print_r($numbers);

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
print_r($fruits);
//sort($fruits);
asort($fruits);
print_r($fruits);

?>