$('body').on('click', '.submit-new-file', function(e) {
    e.preventDefault();
    var id = $(this).attr('id');
    var title = $('#title').val();
    var msg = CKEDITOR.instances['editor1'].getData();
    var infomsg = $('#info-msg');
    if($.trim(title) !== '') {
        if($.trim(msg) !== '') {
            $.ajax({
                type: 'POST',
                url: 'includes/create_forum_topic.inc.php',
                data: {id : id, title : title, msg : msg},
                success: function () {
                    window.location.href = '?page=forum&dbid=' + id;
                },
                error: function (response) {
                    infomsg.html('Hiba létrehozás közben!');
                    infomsg.css('display', 'inline-block');
                    console.log(response);
                }
            });
        } else {
            infomsg.html('Hiányos szöveg!');
            infomsg.css('display','inline-block');
        }
    } else {
        infomsg.html('Hiányos témanév!');
        infomsg.css('display','inline-block');
    }
});
