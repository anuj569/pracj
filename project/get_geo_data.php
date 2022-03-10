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
    Get GEO data
  </h3>
  <BR/>  
    
    <form>
        <h6 align="left">Search Here: <input type="text" id="search_user" name="location"/><button type="submit" class="btn btn-primary float-end">Get data</button>
 </h6>  
        
    </form>
    <?php 
      if(!empty($_GET['location'])){
        $arr = get_geo_data($_GET['location']);
         //print_r($arr);
         echo "Country is {$arr['standard']['countryname']}<BR>";
         echo "longt is {$arr['longt']}<BR>";
         echo "latt is {$arr['latt']}<BR>";
      }
    ?>
    <br/><br/><br/><br/><br/>
<a href="home.php">Add 1 more product</a>
<br/>
<a href="check_user.php">check available users</a>
<br/>
<a href="logout.php">Logout</a>

</div>
</body>
</html>
