$('body').on('click', '.rem-minute', function(e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $('#fv-tr' + id).css('background-color','rgba(255,0,0,0.1)');
    swal({
        title: 'Törlés',
        type: 'warning',
        html: `Biztos ki akarod törölni az jegyzetet?<br /><br /><div style='color:#7a7a7a;font-size:14px;'>Jegyzet sorszáma: <b>${id}</b></div>`,
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Törlés',
        cancelButtonText: 'Mégse',
    }).then((result) => {
        $('#fv-tr' + id).css('background-color','rgba(0,0,0,0)');
        if (result.value) {
            $('#fv-tr' + id).remove();
            $.ajax({
                type: 'POST',
                url: 'includes/rem_minute.inc.php',
                data: {id: id},
                success: function (response) {
                    window.location.href = 'index.php?p=minutes';
                },
                error: function (response) {
                    swal('Hiba!', 'Hiba törlés közben!', 'error');
                    console.log(response);
                }
            });
        }
    });
});
