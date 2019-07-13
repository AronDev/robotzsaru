<html>
    <head>
        <title>Robotzsaru - Belépés</title>
        <meta charset="utf-8">

    </head>
    <body>
        <div id="login-box">
            <h1>Robotzsaru</h1>
            <h4>Belépés</h4><br />
            <input type="text" id="badgeNum" placeholder="Jelvényszám"><br /><br />
            <input type="password" id="password" placeholder="Jelszó"><br /><br />
            <button id="loginButton">Belépés</button><br /><br />
            <div id='loginInfo'>&nbsp</div>
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
                            if(response == "reload") // Ha a visszatérő érték "reload"
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
