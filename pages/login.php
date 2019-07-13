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
            <button id="loginButton">Belépés</button>
        </div>
    </body>
    <script>
    $('body').on('click', '#loginButton', function(e) {
            e.preventDefault();
            var badgeNum = $('#badgeNum').val();
            var password = $('#password').val();

            if($.trim(badgeNum) !== '') {
                if($.trim(password) !== '') {
                    $.ajax({
                        type: 'POST',
                        url: 'includes/login.inc.php',
                        data: { badgeNum : badgeNum, password : password },
                        error: function (response) {
                            console.log(response);
                        }

                    });
                } else {
                    swal({
                    title: 'Hiányos mező',
                    type: 'error',
                    html: `A <b>jelszó</b> mező üresen maradt!`,
                    confirmButtonText: 'Oké',
                    })
                }
            } else {
                swal({
                title: 'Hiányos mező',
                type: 'error',
                html: `A <b>jelvényszám</b> mező üresen maradt!`,
                confirmButtonText: 'Oké',
                })
            }
        });
    </script>
</html>
<?php

?>
