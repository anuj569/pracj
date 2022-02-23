<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
function addition($a,$b,$c=0){
    //return 100;
    $d = $a + $b + $c;
    return $d;
    echo "RRRRRRRRRRR";
}

//echo addition(4,5,7);
echo addition(4,5,8);
?>