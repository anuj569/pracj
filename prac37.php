<?php
$con = mysqli_connect("localhost","root","Admin@123","myprac");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_errno() . "--------" . mysqli_connect_error();
  exit();
}

if(!empty($_GET['city'])){
  $city_where = "WHERE city = '" .$_GET['city'] . "'";
}
else{
  $city_where = "";
}
$result = mysqli_query($con, "select city,fname,cust_id,mname,ltname,mobileno,occupation,salary from customer $city_where order by city,fname desc");

if(!$result){
  echo "Query Failed: " . mysqli_errno($con) . "--------" . mysqli_error($con);
  exit;
}
//print_r($result);exit;
?>
<table border="2">
  <tr><th>id</th><th>fname</th><th>city</th><th>delete</th></tr>
<?php  
while($data = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$data['cust_id']."</td><td>".$data['fname']."</td><td>".$data['city']."</td><td><a href='#'>delete</a></td></tr>";
}
?>
</table>
<?php 
//Closing the statement
mysqli_free_result($res);

//Closing the connection
mysqli_close($con);
?>

