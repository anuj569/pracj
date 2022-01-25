<?php
$t = $_GET['val'];
//echo "<p>The hour (of the server) is " . $t; 
//echo ", and will give the following message:</p>";
/*
if ($t < 10) {
    echo "<BR>its less than 10";
    echo "<BR>its less than 10 - line 2";
}
*/
if ($t < 35 || false) {
    echo "<BR>fail";
}    
//////////////////////
else if($t < 60){
    if($t < 50){
        echo "<BR>lower second class";
    }
    else{
        echo "<BR>highest second class";
    }    
    
}
////////////////////////
else if($t < 75){    
    echo "<BR>First Class";
}
else{
    echo "<BR>Distinction";
}


/*else{

}
*/
/*if ($t < 20) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}*/
?>