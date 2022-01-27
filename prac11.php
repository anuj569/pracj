<?php
echo "<BR>Start of the script";
for ($x = 0; $x <= 10; $x++) {
    echo "<BR>The number is: $x <br>";
    /*if($x > 5){
        break;
    }*/
    if($x > 5){
        continue;
    }    
    echo "<BR>End of loop: The number is: $x <br>";
}
echo "<BR>End of the script";
?>