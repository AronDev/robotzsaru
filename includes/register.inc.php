<?php
session_start();
require("connect.inc.php");

$badgeNum = mysqli_real_escape_string($mysql_id, $_POST["badgeNum"]);
$playerName = mysqli_real_escape_string($mysql_id, $_POST["playerName"]);
$password = mysqli_real_escape_string($mysql_id, $_POST["password"]);

$pwHash = hash('sha512', $password); // Bevitt jelszó dekódolása SHA512-vel

if($result = mysqli_query($mysql_id, "SELECT badge_number FROM users WHERE badge_number='" . $badgeNum . "' OR playername='" . $playerName . "'")) {
    if(mysqli_num_rows($result) == 0) {
        $query = "INSERT INTO users (`badge_number`, `playername`, `password`) VALUES ('" . $badgeNum . "', '" . $playerName . "', '" . $pwHash . "')";

        if(mysqli_query($mysql_id, $query)) {
            echo "Felhasználód létrehozva!\n Várj türelemmel míg elfogadják azt!";
        } else echo "Hiba történt!2";
    } else echo "Már létezik felhasználó ezzel a jelvényszámmal vagy névvel!";
} else echo "Hiba történt!1";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
