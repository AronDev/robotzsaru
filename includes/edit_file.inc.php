<?php
session_start();
require("connect.inc.php");

$filename = mysqli_real_escape_string($mysql_id, $_POST["filename"]);
$title = mysqli_real_escape_string($mysql_id, $_POST["title"]);
$text = mysqli_real_escape_string($mysql_id, $_POST["text"]);
$id = $_POST['id'];
$bn = $_SESSION['badge_number'];

if($result = mysqli_query($mysql_id, "UPDATE files SET file_name='$filename', title='$title', text='$text', edited_by='$bn', edited=CURRENT_TIMESTAMP() WHERE dbid='$id'")) {
    echo "Sikeres szerkesztés!";
} else echo "Hiba történt!";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
