<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/main.min.css?<?php echo time(); ?>"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

        <script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
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
