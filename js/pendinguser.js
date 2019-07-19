$('body').on('click', '.accept-user', function(e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $('#u-tr' + id).remove();
    $.ajax({
        type: 'POST',
        url: 'includes/accept_user.inc.php',
        data: { id : id },
        success: function (response) {
            alertify.success('Kérelem elfogadva! Jelvényszám = ' + id);
        },
        error: function (response) {
            alertify.error("Hiba végrehajtás közben!");
        console.log(response);
        }
    });
});

$('body').on('click', '.decline-user', function(e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $('#u-tr' + id).remove();
    $.ajax({
        type: 'POST',
        url: 'includes/decline_user.inc.php',
        data: { id : id },
        success: function (response) {
            alertify.error('Kérelem elutasítva! Jelvényszám = ' + id);
        },
        error: function (response) {
            alertify.error("Hiba végrehajtás közben!");
        console.log(response);
        }
    });
});
