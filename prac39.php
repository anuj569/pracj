<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//echo 'Current script owner: ' . get_current_user();
//echo exec('whoami');
//file_put_contents("RRR.log","hello1\n", FILE_APPEND);
//error_log("hello\n", 3, "RRR.log");
file_put_contents("myfirst.csv","id,fname,mname,lname\n", FILE_APPEND);
for($i=0;$i<50;$i++){
    $str = "$i,AAA,BBB,CCC\n";
    file_put_contents("myfirst.csv",$str, FILE_APPEND);
}
?>

