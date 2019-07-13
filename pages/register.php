<html>
    <head>
        <title>Robotzsaru - Regisztrálás</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="../styles/main.min.css?<?php echo time(); ?>"/>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link rel="shortcut icon" type="image/png" href="https://banner2.kisspng.com/20180320/dze/kisspng-police-officer-computer-icons-iconfinder-police-icon-hd-5ab16a2db522d3.1179238215215764937419.jpg"/>
    </head>
    <body>
        <div id="login-box">
            <div id="login-title">
            <h1>Robotzsaru</h1>
            <h4>Belépés</h4>
            </div><br />
            <input type="text" id="badgeNum" placeholder="Jelvényszám"><br /><br />
            <input type="password" id="password" placeholder="Jelszó"><br /><br />
            <button id="registerButton"><i class='fas fa-user-plus login-icon'></i>Regisztrálás</button><br /><br />
            <button onclick="window.location.href = 'index.php';"><i class='fas fa-angle-left login-icon'></i>Vissza</button><br /><br />
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
