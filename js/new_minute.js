$('body').on('click', '.submit-new-minute', function(e) {
    e.preventDefault();
    var title = $('#inputTitle').val();
    var text = CKEDITOR.instances['editor1'].getData();
    var infomsg = $('#newminuteInfo');
    if($.trim(title) !== '') {
        if($.trim(text) !== '') {
                $.ajax({
                    type: 'POST',
                    url: 'includes/new_minute.inc.php',
                    data: { title : title, text : text },
                    success: function (response) {
                        window.location.href = 'index.php?p=minutes&t=view&id=' + response;
                    },
                    error: function (response) {
                        infomsg.html('Hiba létrehozás közben!');
                        console.log(response);
                    }
                });
        } else infomsg.html('Hiányos tartalom!');
    } else infomsg.html('Hiányos megnevezés!');
});
