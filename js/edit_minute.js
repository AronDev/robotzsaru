$('body').on('click', '.submit-edit-minute', function(e) {
    e.preventDefault();
    var title = $('#inputTitle').val();
    var id = $(this).attr('id');
    var text = CKEDITOR.instances['editor1'].getData();
    var infomsg = $('#editminuteInfo');
    if($.trim(title) !== '') {
        if($.trim(text) !== '') {
                $.ajax({
                    type: 'POST',
                    url: 'includes/edit_minute.inc.php',
                    data: { title : title, text : text, id : id },
                    success: function (response) {
                        window.location.href = 'index.php?p=minutes&t=view&id=' + id;
                    },
                    error: function (response) {
                        infomsg.html('Hiba szerkesztés közben!');
                        console.log(response);
                    }
                });
        } else infomsg.html('Hiányos tartalom!');
    } else infomsg.html('Hiányos megnevezés!');
});
