<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//$numbers = array(12,23,45,20,5,1025,6,34,17,9000,56,999);
$array = array('first'=>'111', 'second'=>'222', 'third'=>'333');
function array_keys_custom($arr){
    $out = array();
    //$out = array("ford","tata");
    //$i = 0;
    if(is_array($arr)){
        foreach($arr as $key => $val){
            //echo "\n $key => $val :: $i\n";
            array_push($out,$key,$val);
            //$out[] = $key;
            //$out[$i] = $key;
            //$i++;
        }
    }
    return $out;
}

$array_new2 =  array_keys_custom($array);
//print_r($array_new2);

$array_new2 =  array_keys_custom(45);
print_r($array_new2);

if(isset($array['first11'])){
    echo $array['first11'];
}
else{
    echo "first11 does not exists";
}
?>