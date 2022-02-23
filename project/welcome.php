<?php require_once("header.php"); ?>
<?php //print_r($_SESSION);exit;?>
<body>
  <?php
  if(isset($_COOKIE['username'])){
    echo "Welcome " . $_COOKIE['username'];
  }
  else{
    header('location: login.php');
}
  ?>
</body>
</html>
