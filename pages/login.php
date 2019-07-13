<html>
    <head>
        <title>Robotzsaru - Belépés</title>
    </head>
    <body>
        <div id="login-box">
            <div id="login-title">
            <h1>Robotzsaru</h1>
            <h4>Belépés</h4>
            </div><br />
            <input type="text" id="badgeNum" placeholder="Jelvényszám"><br /><br />
            <input type="password" id="password" placeholder="Jelszó"><br /><br />
            <button id="loginButton"><i class='fas fa-sign-in-alt login-icon'></i>Belépés</button><br /><br />
            <button onclick="window.location.href = 'pages/register.php';"><i class='fas fa-user-plus login-icon'></i>Regisztrálás</button><br /><br />
            <div id='loginInfo'>&nbsp</div><br />
        </div>
    </body>
    <script src="js/login.js"></script>
</html>
<?php
//
?>
