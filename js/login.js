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
                success: function(data) {
                    console.log(data);
                    if(data == "Sikeresen bejelentkeztél!") {
                        console.log("success");
                        location.reload();
                    } else {
                        console.log("error");
                        loginInfo.html(data);
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        } else loginInfo.html('Hiányos jelszó!');
    } else loginInfo.html('Hiányos jelvényszám!');
});
