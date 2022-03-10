<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/left_menu.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
$(document).ready(function(){
  $("#search_user").keyup(function(){
   var username = $(this).val().trim();
   if(true){
    $.ajax({
         url: 'check_user_availability.php?user=' + username,
         type: 'get',
         success: function(response){
            //alert(response);
             $('#cust_table').html(response);
          }
      });
   }
  });
});


  </script>  
</head>
<?php require_once("constants.php"); ?>
<?php require_once("common_functions.php"); ?>
