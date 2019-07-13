$('body').on('click', '#registerButton', function(e) {
    e.preventDefault();
    var badgeNum = $('#badgeNum').val();
    var playerName = $('#playerName').value();
    var password = $('#password').val();
    var password2 = $('#password2').val();

    var registerInfo = $('#registerInfo');

    if($.trim(badgeNum) !== '') {
        if(!isNaN(badgeNum)) {
            if($.trim(playerName) !== '') {
                if(playerName.indexOf('_') !== -1) {
                    if([...playerName].length <= 25) {
                        if($.trim(password) !== '' || $.trim(password2) !== '') {
                            if(password === password2) {
                                $.ajax({
                                    type: 'POST',
                                    url: '../includes/register.inc.php',
                                    data: { badgeNum : badgeNum, playerName : playerName, password : password },
                                    success: function(response) {
                                        if(response == "index") window.location.href = '../index.php';
                                        else registerInfo.html(response);
                                    },
                                    error: function (response) {
                                        console.log(response);
                                    }
                                });
                            } else registerInfo.html('A két jelszó nem megegyező!');
                        } else registerInfo.html('Hiányos jelszó!');
                    } else registerInfo.html('Túl hosszú név! (max 24 karakter)');
                } else registerInfo.html('A névnek tartalmaznia kell alsóvonalat!');
            } else registerInfo.html('Hiányos név!');
        } else registerInfo.html('Hibás jelvényszám!');
    } else registerInfo.html('Hiányos jelvényszám!');
});
