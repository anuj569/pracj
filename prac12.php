<?php
echo "<BR>Start of the script";
$x = 10;
 
/*while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
*/

do {
    echo "<BR>The number is: $x <br>";
    $x++;
} while ($x <= 5);
/*
$res = mysql_query("SELECT * from users");
 
while($row = mysql_fetch_array($res)) {
  echo "The number is: $row <br>";
}
*/
echo "<BR>End of the script";
?>