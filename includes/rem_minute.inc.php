<?php
session_start();
require("connect.inc.php");

$id = $_POST['id'];

if($result = mysqli_query($mysql_id, "DELETE FROM minutes WHERE dbid='$id'")) {
} else echo "Hiba történt!";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
