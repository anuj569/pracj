<?php
date_default_timezone_set('Asia/Calcutta'); 
session_start(); 
$conn = mysqli_connect("localhost","root","Admin@123","myprac");
ini_set('display_errors', 1);
error_reporting(E_ALL);
// needs to be added
function basic_validation_user_password(){
    $err_arr = array();
    if(!empty($_REQUEST['username'])){
        if(strlen($_REQUEST['username']) <=4){
            $err_arr['username'] = "Username can not be less than 4";               
        }
    }
    else{
        $err_arr['username'] = "Username can not be blank";               
    }

    if(!empty($_REQUEST['password'])){
        if(strlen($_REQUEST['password']) <=5){
            $err_arr['password'] = "Password can not be less than 5";               
        }
    }
    else{
        $err_arr['password'] = "Password can not be blank";               
    }

    return $err_arr;
}

function db_validation_user_password($conn) {
    $login_status = array();
    $encoded_pwd = md5($_REQUEST['password']);
    //$login = validate_login($_REQUEST['username'],$_REQUEST['password']);
    $query = "select * from customer WHERE fname='{$_REQUEST['username']}' AND password = '$encoded_pwd'";
    //echo $query;exit;
    
    $result = mysqli_query($conn, $query);
    if($result){
        //echo "here1";
        if(mysqli_num_rows($result) == 1){
            //echo "here2";
            $login_status['user_data'] = mysqli_fetch_assoc($result);
            //print_r($user_data);exit;
            $login_status['status'] = true;
        }
        else{
            //echo "here3";
            $login_status['status'] = false;    
        }
    }
    else{
        write_error_log("Query failed: $query");    
       //echo "here4";
        $login_status['status'] = false;    
    }
    return $login_status;
}

function write_error_log($str){
    $date = date('Y-m-d H:i:s');
    $str = "$date ::$str\n";
    $base_path = ERROR_LOG_PATH;
    $log_file_name = $base_path . date('Ymd') . ".txt";
    file_put_contents($log_file_name,$str,FILE_APPEND);
}

function write_access_log(){
    $date = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $uri = $_SERVER['REQUEST_URI'];
    $log = "$date :: ip=$ip ::uri=$uri\n";
    $base_path = ACCESS_LOG_PATH;
    $log_file_name = $base_path . date('Ymd') . ".txt";
    file_put_contents($log_file_name,$log,FILE_APPEND);
}
write_access_log();

function get_all_customers($conn){
    $emp_data = "SELECT * FROM customer";
      $arr = array();
      $result = mysqli_query($conn, $emp_data);
      while($data = mysqli_fetch_assoc($result)){
        $arr[] = $data;
    }
    return $arr;
}

function get_customers_search($conn,$user){
    $emp_data = "select * from customer where fname like '%$user%'";
      $arr = array();
      $result = mysqli_query($conn, $emp_data);
      while($data = mysqli_fetch_assoc($result)){
        $arr[] = $data;
    }
    return $arr;
}

function get_geo_data($str){
    $third_party_url  = "https://geocode.xyz/$str?json=1";
    //$out = file_get_contents($third_party_url);
    $out = getUrl($third_party_url);
    //print "!!!!$out!!!!";exit;



    $out_arr = json_decode($out,1);  
    //print_r($out_arr);exit;
    return $out_arr;
}

function getUrl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL,$url);
    //curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS,"postvar1=value1&postvar2=value2&postvar3=value3");
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    //print_r($info);
    //print $response;exit;
    curl_close($ch);
    return $response;
}   
?>
