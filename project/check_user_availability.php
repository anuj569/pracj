<?php
require_once("constants.php");
require_once("common_functions.php");

if(!empty($_GET['user'])){
  $search = $_GET['user'];
  $arr = get_customers_search($conn,$search);
  //$str = json_encode($arr);
  //echo $str;
}
else{
  $arr = get_all_customers($conn);
}

if(!empty($_GET['json'])){
  $str = json_encode($arr);
  echo $str;
  exit;
}

if(!empty($arr)){
?>
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Name</th>
<th scope="col">Occupation</th>
<th scope="col">City</th>
</tr>
</thead>
<tbody>
<?php foreach ($arr as $key => $value) {
?>  
<tr>
<th scope="row"><?php echo $value['cust_id'];?></th>
<td><?php echo $value['fname'];?></td>
<td><?php echo $value['occupation'];?></td>
<td><?php echo $value['city'];?></td>
</tr>
<?php } ?>
</tbody>
<?php } ?>