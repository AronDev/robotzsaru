<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/main.min.css?<?php echo time(); ?>"/>
    </head>
</html>
<?php
session_start();
require("includes/connect.inc.php");

if($_SESSION['logged'] == true) { // Ha a felhasználó be van lépve
    include("pages/mainpage.php");
} else { // Ha a felhasználó nincs belépve
    include("pages/login.php");
}
?>
