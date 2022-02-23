<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- <a href="maths_sum.php">Plus Minus</a> -->
  <a href="logout.php">Logout</a>
  <!--<a href="highest_lowest.php">Highest Lowest</a> -->
</div>
<?php 
$user_name = "Guest";
if(!empty($_SESSION['name'])){
  $user_name = $_SESSION['name'];
} 
?>
<span style="font-size:30px;cursor:pointer" class="blink" onclick="openNav()">&#9776;</span>
<span style="font-size:30px;cursor:pointer" onclick="openNav()"><?php echo "Welcome $user_name";?></span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
