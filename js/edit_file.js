$('body').on('click', '.submit-edit-file', function(e) {
    e.preventDefault();
    var filename = $('#inputFileName').val();
    var title = $('#inputTitle').val();
    var id = $(this).attr('id');
    var text = CKEDITOR.instances['editor1'].getData();
    var infomsg = $('#editfileInfo');
    if($.trim(title) !== '') {
        if($.trim(text) !== '') {
            if($.trim(filename) !== '') {
                $.ajax({
                    type: 'POST',
                    url: 'includes/edit_file.inc.php',
                    data: { filename : filename, title : title, text : text, id : id },
                    success: function (response) {
                        window.location.href = 'index.php?p=files&t=view&id=' + id;
                    },
                    error: function (response) {
                        infomsg.html('Hiba szerkesztés közben!');
                        console.log(response);
                    }
                });
            } else infomsg.html('Hiányos sorszám!');
        } else infomsg.html('Hiányos tartalom!');
    } else infomsg.html('Hiányos megnevezés!');
});
