<?php require_once("header.php"); ?>
<?php //print_r($_SESSION);exit;?>
<body>
<?php require_once("left_menu.php"); ?>  
<div class="container">
  <h3 align="center">
    List Of Employees
  </h3>
  <BR/>  
    <?php 
      $emp_data = "SELECT * FROM employee_new";
      $arr = $connection->fetch_data($emp_data);
      //print_r($arr);
    ?>
   <h6 align="right"><a href='download_report.php'>Download Here</a></h6> 
   <div class="bd-example">
        <table class="table table-sm table-bordered">
          <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">City</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach ($arr as $key => $value) {
          ?>  
          <tr>
            <th scope="row"><?php echo $value['id'];?></th>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['dept'];?></td>
            <td><?php echo $value['city'];?></td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
        </div>
<!-- 
<a href="home_new.php">Add 1 more product</a>
<br/>
<a href="logout.php">Logout</a>
-->
</div>
</body>
</html>
