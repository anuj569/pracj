<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
<?php
if(!empty($_REQUEST)){
    print "Hello " . $_REQUEST['fname'] . " " . $_REQUEST['lname'];
    print "<BR><BR>";
    print_r($_REQUEST);
}
?>
<form method="POST">
  First name:<input type="text" id="fname" name="fname" ><br><br>
  Last name:<input type="text" id="lname" name="lname" ><br><br>
  Password:<input type="password" id="pwd" name="pwd"><br><br>
  Technologies:<BR>  
  <input type="radio" id="html" name="fav_language" value="HTML">
  HTTP<br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  CSS<br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  JavaScript<BR><BR>

  <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>
  <input type="hidden" id="custId" name="custId" value="<?php echo date('Y-m-d h:i:s');?>">

  <input type="submit" value="Submit"> <input type="reset">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>