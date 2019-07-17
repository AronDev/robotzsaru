<?php
if($result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author WHERE dbid='$id'")) {
    $row = mysqli_fetch_assoc($result);
    echo "<div id='fileview_content'>";
    echo "<h1>Akták » " . $row['file_name'] . "</h1>";
    echo "<div style='display: inline;'>";
    echo "<a class='button-danger rem-file' style='float:right;' name='" . $row['file_name'] . "' id='$id'>Törlés</a>";
    echo "<a href='index.php?p=files&t=edit&id=" . $id . "' class='button-norm' style='float:right;'>Módosítás</a>";
    echo "</div>";
    echo "<br /><br />";
    echo "<table id='fileview_table'>";
        echo "<tr>";
            echo "<td><b>Akta sorszáma</b></td>";
            echo "<td>" . $row['file_name'] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td><b>Megnevezés</b></td>";
            echo "<td>" . $row['title'] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td><b>Szerző</b></td>";
            echo "<td><a href='index.php?p=users&t=view&id=" . $row['author'] . "'>" . RPName($row['playername']) . "</a></td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td><b>Kelt</b></td>";
            echo "<td>" . $row['timestamp'] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td colspan='2' style='text-align:center;'><b>Akta tartalma</b></td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td colspan='2'>" . $row['text'] . "</td>";
        echo "</tr>";
    echo "</table>";
    echo "</div>";
} else echo "<h1>Hiba történt!</h1>";
?>
<script>
$('body').on('click', '.rem-file', function(e) {
    e.preventDefault();
    var id = $(this).attr('id');
    var fName = $(this).attr('name');
    $('#fv-tr' + id).css('background-color','rgba(255,0,0,0.1)');
    swal({
        title: 'Törlés',
        type: 'warning',
        html: `Biztos ki akarod törölni az aktát?<br /><br /><div style='color:#7a7a7a;font-size:14px;'>Akta sorszáma: <b>${fName}</b></div>`,
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
                url: 'includes/rem_file.inc.php',
                data: {id: id},
                success: function (response) {
                    window.location.href = 'index.php?p=files';
                },
                error: function (response) {
                    swal('Hiba!', 'Hiba törlés közben!', 'error');
                    console.log(response);
                }
            });
        }
    });
});

</script>
