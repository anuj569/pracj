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
    Check if Cusomers exists
  </h3>
  
<a href="home.php">go to home</a>
  <br/>
<a href="logout.php">Logout</a>

</div>
</body>
</html>
