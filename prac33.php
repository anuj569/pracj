<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  //$("p").click(function(){
  $("p:first").click(function(){  
    alert("hello");
    $("#RRR").hide();
  });

});
</script>
</head>
<body>

<p>If you click on me, I will disappear.</p>
<p id="RRR">Click me away!</p>
<p>Click me too!</p>

</body>
</html>
