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
                    location.reload();
                    //loginInfo.html(data);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else loginInfo.html('Hiányos jelszó!');
    } else loginInfo.html('Hiányos jelvényszám!');
});
