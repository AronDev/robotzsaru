<html>
    <head>
        <title>Robotzsaru - Regisztrálás</title>
    </head>
    <body>
        <div id="login-box">
            <div id="login-title">
            <h1>Robotzsaru</h1>
            <h4>Belépés</h4>
            </div><br />
            <input type="text" id="badgeNum" placeholder="Jelvényszám"><br /><br />
            <input type="password" id="password" placeholder="Jelszó"><br /><br />
            <button id="registerButton">Belépés</button><br /><br />
            <button onclick="window.location.href = 'index.php';"><i class='fas fa-angle-left' style="margin-right:5px;"></i>Vissza</button><br /><br />
            <div id='registerInfo'>&nbsp</div><br />
        </div>
    </body>
    <script>
    $('body').on('click', '#loginButton', function(e) {
            e.preventDefault();
            var badgeNum = $('#badgeNum').val();
            var password = $('#password').val();

            var loginInfo = $('#loginInfo');

            if($.trim(badgeNum) !== '') {
                if($.trim(password) !== '') {
                    $.ajax({
                        type: 'POST',
                        url: 'includes/login.inc.php',
                        data: { badgeNum : badgeNum, password : password },
                        success: function(response) {
                            if(response == "reload")
                                location.reload();
                            else
                                loginInfo.html(response);
                        },
                        error: function (response) {
                            console.log(response);
                        }
                    });
                } else {
                    loginInfo.html('Hiányos jelszó!');
                }
            } else {
                loginInfo.html('Hiányos jelvényszám!');
            }
        });
    </script>
</html>
<?php
//
?>
