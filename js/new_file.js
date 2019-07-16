$('body').on('click', '.submit-new-file', function(e) {
    e.preventDefault();
    var filename = $('#inputFileName').val();
    var title = $('#inputTitle').val();
    var text = CKEDITOR.instances['editor1'].getData();
    var infomsg = $('#newfileInfo');
    if($.trim(title) !== '') {
        if($.trim(text) !== '') {
            if($.trim(filename) !== '') {
                $.ajax({
                    type: 'POST',
                    url: 'includes/new_file.inc.php',
                    data: { filename : filename, title : title, text : text },
                    success: function (response) {
                        if(!isNaN(response)) {
                            window.location.href = 'index.php?p=files&t=view&id=' + response;
                        }
                    },
                    error: function (response) {
                        infomsg.html('Hiba létrehozás közben!');
                        console.log(response);
                    }
                });
            } else infomsg.html('Hiányos sorszám!');
        } else infomsg.html('Hiányos tartalom!');
    } else infomsg.html('Hiányos megnevezés!');
});
