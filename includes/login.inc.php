<?php
session_start();
require("connect.inc.php");

$badgeNum = mysqli_real_escape_string($mysql_id, $_POST["badgeNum"]);
$password = mysqli_real_escape_string($mysql_id, $_POST["password"]);

$pwHash = hash('sha512', $password);

if($result = mysqli_query($mysql_id, "SELECT * FROM users WHERE (BINARY badge_number='" . $badgeNum . "') AND password='" . $pwHash . "'")) {
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1) { // Ha létezik az adott jelvényszámmal felhasználó és a jelszó megegyező
        if($row['active'] == 1) {
            // Adatok betöltése
            $_SESSION['logged'] = true;
            $_SESSION['badge_number'] = $badgeNum;

            echo("reload");
        } else {
            echo "A felhasználó nincs aktiválva!";
        }
    } else {
        echo "Hibás adatok!";
    }
} else {
    echo "Hiba történt!";
}

unset($_POST);
$_POST = array();
?>
