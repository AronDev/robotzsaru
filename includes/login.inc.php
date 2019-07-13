<?php
session_start();
require("connect.inc.php");

$badgeNum = mysqli_real_escape_string($mysql_id, $_POST["badgeNum"]);
$password = mysqli_real_escape_string($mysql_id, $_POST["password"]);

$pwHash = hash('sha512', $password);

$result = mysqli_query($mysql_id, "SELECT * FROM users WHERE (BINARY badge_number='" . $badgeNum . "') AND password='" . $pwHash . "'");
$count = mysqli_num_rows($result);
$rows = mysqli_fetch_assoc($result);

if($count == 1) { // Ha létezik az adott jelvényszámmal felhasználó és a jelszó megegyező
    // Adatok betöltése
    $_SESSION['logged'] = true;
    $_SESSION['badge_number'] = $badgeNum;

    header("Refresh: 0, url=../index.php");
} else {
    echo "<span id='loginInfo'>Hibás adatok!</span>";
}

unset($_POST);
$_POST = array();
?>
