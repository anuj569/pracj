<?php require_once("header.php"); ?>

<?php
if(empty($_SESSION)){
  header("location: login.php");
  exit;
} 
//print_r($_SESSION);
?>
<body>
<?php require_once("left_menu.php"); ?>  
<div class="container">
  <h3 align="center">
    List Of Cusomers
  </h3>
  <BR/>  
    <?php 
      $emp_data = "SELECT * FROM customer";
      $arr = array();
      $result = mysqli_query($conn, $emp_data);
      while($data = mysqli_fetch_assoc($result)){
        $arr[] = $data;
    }
     // print_r($arr);exit;
    ?>
   <h6 align="right"><a href='download_report.php'>Download Here</a></h6> 
   <div class="bd-example">
        <table class="table table-sm table-bordered">
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
        </table>
        </div>

<a href="home_new.php">Add 1 more product</a>
<br/>
<a href="logout.php">Logout</a>

</div>
</body>
</html>
