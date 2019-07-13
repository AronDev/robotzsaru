<?php
session_start();
require("connect.inc.php");

$badgeNum = mysqli_real_escape_string($mysql_id, $_POST["badgeNum"]);
$playerName = mysqli_real_escape_string($mysql_id, $_POST["playerName"]);
$password = mysqli_real_escape_string($mysql_id, $_POST["password"]);

$pwHash = hash('sha512', $password); // Bevitt jelszó dekódolása SHA512-vel

if($result = mysqli_query($mysql_id, "INSERT INTO users ('badge_number', 'playername', 'password') VALUES ('" . $badgeNum . "', '" . $playerName . "', '" . $pwHash . "')")) {
    echo "Felhasználód létrehozva!\n Várj türelemmel míg elfogadják azt!";
} else echo "Hiba történt!";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
