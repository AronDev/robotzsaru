<?php
if($result = mysqli_query($mysql_id, "SELECT * FROM files WHERE dbid='$dbid'")) {
    $row = mysqli_fetch_assoc($result);
    echo "<did id='files-content'>";
    echo "<table id='files'>";
        echo "<tr>";
            echo "<td><b>Akta sorszáma</b></td>";
            echo "<td>" . $row['file_name'] . "</td>";
        echo "</tr>";
    echo "</table>";
    echo "</div>";
} else echo "<h1>Hiba történt!</h1>";
?>
