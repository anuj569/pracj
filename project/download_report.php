<?php
require_once("constants.php");
require_once("common_functions.php");
$arr = get_all_customers($conn);
//print_r($arr);exit;
$temp_filename = "uploads/report" . date('YmdHis') . ".csv";
$str = "Id,Name,Occupation,City\n";
foreach ($arr as $key => $value) {
  $str .= $value['cust_id'] . "," . $value['fname'] . "," . $value['occupation'] . "," . $value['city'] . "\n";
}
//echo $str;exit;

//step 2:
file_put_contents($temp_filename, $str);
//header("location: uploads/profile_15.jpg");
//exit;
//step 3: 
if(file_exists($temp_filename)){
  header("Content-Description: File Transfer"); 
  header("Content-Type: application/octet-stream"); 
  header("Content-Disposition: attachment; filename=\"". basename($temp_filename) ."\""); 
  readfile ($temp_filename);
  exit(); 
}
?>
