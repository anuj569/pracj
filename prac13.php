<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$cars = array("Volvo", "BMW", "Toyota", 56 , 74.52 , true); 
//echo "<BR>hello1" , "TTT" , $d;
//print "<BR>hello2" . "TTT";
//print $cars;
print_r($cars);
print "<BR><BR>";
var_dump($cars);

print "<BR><BR>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($age);
print "<BR><BR>";
var_dump($age);

print "<BR><BR>";
print $cars[1];


?>