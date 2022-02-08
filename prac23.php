<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo md5('anuj$#672#1');exit;
$input = $_GET['pwd'];
$table = 'ae010d5daefa9e63e3f31078a9946c31';
if(md5($input) == $table){
    echo "password match";
}
else{
    echo "wrong password";
}

//echo md5($text);
?>