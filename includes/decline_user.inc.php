<?php
session_start();
require("connect.inc.php");

$id = $_POST['id'];

if($result = mysqli_query($mysql_id, "DELETE FROM users WHERE badge_number='$id'")) {
} else echo "Hiba történt!";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
