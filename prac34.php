<?php
print_r($_COOKIE);
//$name = $_GET['name'];
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE['first_name'])){
  $name = "Anuj";
  echo time();
  echo "<BR>";
  echo time() + 60;
  setcookie('first_name', "Anuj", time() + 60, "/"); // 86400 = 1 day
  setcookie('lname', "Pandey", time() + 60, "/");
}
else{
  echo "in else";
  print_r($_COOKIE);
}
?>