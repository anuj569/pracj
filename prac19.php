<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
print_r($rand_keys);
print $input[$rand_keys];
?>