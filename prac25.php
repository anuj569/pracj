<?php
date_default_timezone_set('Asia/Kolkata'); 
ini_set('display_errors', 1);
error_reporting(E_ALL);
/*
echo "<BR>" . date('Y-m');
echo "<BR>" . date('Y-m-d');
echo "<BR>" . date('Y#####m###########d');
echo "<BR>" . date('y-m-d M === F --- D');
echo "<BR>" . date('Y-m-d H:i:s');
echo "<BR>" . date('d/m/y');
echo "<BR>" . date('m/d/y');
*/
//echo strtotime(); 
// YYYY-MM-DD
// 05/02/22
/*
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
*/

$input_date = $_GET['dt'];
echo "\n<BR>" . $input_date;
//$timestamp = strtotime($input_date);
$timestamp = strtotime($input_date . "+42 days");
//$timestamp = strtotime($input_date . "+1 week 2 days 4 hours 2 seconds");
echo "\n<BR>" . $timestamp;
$new_format = date('Y-m-d H:i:s',$timestamp);
echo "\n<BR>" . $new_format;



?>