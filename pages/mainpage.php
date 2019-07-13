<?php
session_start();
require("includes/functions.inc.php");
echo "asd";
echo "Üdvözlünk, " . getUserName($_SESSION['badge_number']);
?>
