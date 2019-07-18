<?php
session_start();
require("connect.inc.php");

$title = mysqli_real_escape_string($mysql_id, $_POST["title"]);
$text = mysqli_real_escape_string($mysql_id, $_POST["text"]);
$id = $_POST['id'];
$bn = $_SESSION['badge_number'];

$query = "UPDATE minutes SET title='$title', text='$text', edited_by='$bn', edited=CURRENT_TIMESTAMP() WHERE dbid='$id'";

if($result = mysqli_query($mysql_id, $query)) {
    echo "Sikeres szerkesztés!";
} else echo "Hiba történt!";

// POST adatok törlése
unset($_POST);
$_POST = array();
?>
