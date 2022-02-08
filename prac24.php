<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$str = "Hello Anuj";
echo $out = base64_encode($str);
echo "<br>";
echo base64_decode($out);
echo "<br>";
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
/*$final = "";
foreach($input as $val){
    $final = $final . "$val|"; 
}
*/
echo $final2 = implode('|',$input);
//trim
//ltrim
//rtrim
//echo $final2 = trim($final,'|');
$final3 = explode('|',$final2);
echo "<br>";
print_r($final3);

$str1 = 'This is Banglore';
$str2 = 'This is banglore';
echo "<br>";
if(strtolower($str1) == strtolower($str2)){
    echo "Matched";
}
else{
    echo "Not matched";
}

echo "<br>";
$str1 = 'video';
$str2 = 'vedeooooo';

if(soundex($str1) == soundex($str2)){
    echo "Matched";
}
else{
    echo "Not matched";
}
?>