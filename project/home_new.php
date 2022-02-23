<?php require_once("header.php"); ?>
<?php
$new_item = array(id => date('His'), qty => 1, "Country" => "IN");
//print_r($new_item);
$_SESSION['cart'][] = $new_item;
//print_r($_SESSION);exit;
header("location: home.php");
exit;
?>
