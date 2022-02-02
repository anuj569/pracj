<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$test_arr = array
                ("Volvo", 
                array(
                    "red" => 2,
                    "green" => 5,
                    "blue" => array(500,1000,1500)
                 ), 
                "Toyota", 
                56 , 
                74.52 , 
                true); 
print_r($test_arr);
print "<BR><BR>"; 
print $test_arr[2];
print "<BR><BR>"; 
print $test_arr[1]['blue'][2]; 

print "<BR><BR>"; 
if(isset($test_arr[1]['blue'][4])){
    print $test_arr[1]['blue'][4];
}
else{
    print "no data found";
}

foreach($test_arr as $key => $val){
    echo "<BR> $key :::: $val";    
}

foreach($test_arr as $val){
    echo "<BR>:::: $val";    
}
?>