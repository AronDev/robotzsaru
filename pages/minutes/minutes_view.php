<?php
if($result = mysqli_query($mysql_id, "SELECT minutes.*, users.playername FROM minutes INNER JOIN users ON users.badge_number=minutes.author WHERE dbid='$id'")) {
    $row = mysqli_fetch_assoc($result);
    echo "<div id='fileview_content'>";
    echo "<h1>Jegyzőkönyvek » " . $row['dbid'] . "</h1>";
    echo "<div style='display: inline;'>";
    echo "<a class='button-danger' style='float:right;'>Törlés</a>";
    echo "<a href='index.php?p=minutes&t=edit&id=" . $id . "' class='button-norm' style='float:right;'>Módosítás</a>";
    echo "</div>";
    echo "<br /><br />";
    echo "<table id='fileview_table'>";
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
            echo "<td colspan='2' style='text-align:center;'><b>Jegyzőkönyv tartalma</b></td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td colspan='2'>" . $row['text'] . "</td>";
        echo "</tr>";
    echo "</table>";
    echo "</div>";
} else echo "<h1>Hiba történt!</h1>";
?>
