<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$str = "aaaqqqwwwsssdddssaaa+++###+%%%33++aaaa+";
$out = array();
//$str = array(2,3,4);
$len =  strlen($str);
for($i=0;$i < $len;$i++){
    echo "\n $str[$i]";
    $val = $str[$i];
    if(isset($out[$val])){
    //if($out[$val] > 0){    
        $out[$val] = $out[$val] + 1;
    }
    else{
        $out[$val] = 1;
    }
}
print_r($out);
//echo $str[4];
//$out = array ('a' => 6,'w' => 7, '+' => 8);

?>