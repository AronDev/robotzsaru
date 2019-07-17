<?php
session_start();
require("connect.inc.php");

$title = mysqli_real_escape_string($mysql_id, $_POST["title"]);
$text = mysqli_real_escape_string($mysql_id, $_POST["text"]);

$badgenum = $_SESSION['badge_number'];

if($result = mysqli_query($mysql_id, "INSERT INTO minutes (`title`, `author`, `text`) VALUES ('$title', '$badgenum', '$text')")) {
    echo mysqli_insert_id($mysql_id);
} else echo "Hiba történt!";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
