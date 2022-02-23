<?php require_once("header.php"); ?>
<?php
session_destroy();
header("location: login.php");
exit;
?>
