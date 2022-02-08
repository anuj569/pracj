<?php
//$numbers = array(12,23,45,20,5,1025,6,34,17,9000,56,999);
$array = array('first'=>'111', 'second'=>'222', 'third'=>'333');
print_r($array);
print "\n\n";
$array_new =  array_keys($array);
print_r($array_new);

function array_keys_custom($arr){
    $out = array();
    //$out = array("ford","tata");
    //$i = 0;
    foreach($arr as $key => $val){
        echo "\n $key => $val :: $i\n";
        array_push($out,$key,$val);
        //$out[] = $key;
        //$out[$i] = $key;
        //$i++;
    }
    return $out;
}

$array_new2 =  array_keys_custom($array);
print_r($array_new2);

?>