<?php
//step 1: 
require_once("db_connect.php");
$emp_data = "SELECT * FROM customer";
$arr = $connection->fetch_data($emp_data);
//print_r($arr);exit;
$temp_filename = "uploads/report" . date('YmdHis') . ".csv";
$str = "Id,Name,Department,City\n";
foreach ($arr as $key => $value) {
  $str .= $value['id'] . "," . $value['name'] . "," . $value['occupation'] . "," . $value['city'] . "\n";
}
//echo $str;exit;

//step 2:
file_put_contents($temp_filename, $str);

//step 3: 
if(file_exists($temp_filename)){
  header("Content-Description: File Transfer"); 
  header("Content-Type: application/octet-stream"); 
  header("Content-Disposition: attachment; filename=\"". basename($temp_filename) ."\""); 
  readfile ($temp_filename);
  exit(); 
}
?>
