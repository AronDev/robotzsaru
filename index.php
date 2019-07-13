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

        <meta charset="utf-8">

        <title>Robotzsaru</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link rel="shortcut icon" type="image/png" href="https://banner2.kisspng.com/20180320/dze/kisspng-police-officer-computer-icons-iconfinder-police-icon-hd-5ab16a2db522d3.1179238215215764937419.jpg"/>
    </head>
</html>
<?php
session_start();
require("includes/connect.inc.php");
require("includes/functions.inc.php");

if($_SESSION['logged'] == true) { // Ha a felhasználó be van lépve
    include("pages/mainpage.php");
} else { // Ha a felhasználó nincs belépve
    include("pages/login.php");
}
?>
