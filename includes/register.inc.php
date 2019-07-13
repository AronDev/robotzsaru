<?php
session_start();
require("connect.inc.php");

$badgeNum = mysqli_real_escape_string($mysql_id, $_POST["badgeNum"]);
$password = mysqli_real_escape_string($mysql_id, $_POST["password"]);

$pwHash = hash('sha512', $password); // Bevitt jelszó dekódolása SHA512-vel

//TODO

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
