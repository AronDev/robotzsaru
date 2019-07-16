<?php
include("../config.php");
?>
<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Regisztrálás</title>
        <meta charset="utf-8">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../styles/main.min.css?<?php echo time(); ?>"/>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link rel="shortcut icon" type="image/png" href=""/>
    </head>
    <body>
        <div id="login-box">
            <div id="login-title">
            <h1>Robotzsaru</h1>
            <h4>Regisztrálás</h4>
            </div><br />
            <input type="text" id="badgeNum" placeholder="Jelvényszám"><br /><br />
            <input type="text" id="playerName" placeholder="Név"><br /><br />
            <input type="password" id="password" placeholder="Jelszó"><br /><br />
            <input type="password" id="password2" placeholder="Jelszó újra"><br /><br />
            <button id="registerButton"><i class='fas fa-user-plus login-icon'></i>Regisztrálás</button><br /><br />
            <button onclick="window.location.href = '../index.php';"><i class='fas fa-angle-left login-icon'></i>Vissza</button><br /><br />
            <div id='registerInfo'>&nbsp</div><br />
        </div>
        <script src="../js/register.js"></script>
    </body>
</html>
<?php
//
?>
