<?php
session_start();

if(isset($_SESSION['first_time'])){
    echo "You have visted this page on " . $_SESSION['first_time'];
  }
  else{
    $curr_time = date('Y-m-d H:i:s');
    echo "You are visting this page first time. Your visit time will be set to $curr_time";
    $_SESSION['first_time'] = $curr_time;
}
?>