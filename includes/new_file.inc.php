<?php
session_start();
require("connect.inc.php");

$filename = mysqli_real_escape_string($mysql_id, $_POST["filename"]);
$title = mysqli_real_escape_string($mysql_id, $_POST["title"]);
$text = mysqli_real_escape_string($mysql_id, $_POST["text"]);

$badgenum = $_SESSION['badge_number'];

if($result = mysqli_query($mysql_id, "INSERT INTO files (`file_name`, `title`, `author`, `text`) VALUES ('$filename', '$title', '$badgenum', '$text')")) {
    $insertID = mysqli_insert_id($result);
    echo $insertID;
} else echo "Hiba történt!";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
