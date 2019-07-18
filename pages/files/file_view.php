<?php
if($result = mysqli_query($mysql_id, "SELECT files.*, u1.playername as p1, u2.playername as p2 FROM files INNER JOIN users as u1 ON users.badge_number=files.author INNER JOIN users as u2 ON users.badge_number=files.edited_by WHERE dbid='$id'")) {
    $row = mysqli_fetch_assoc($result);
    echo "<div id='fileview_content'>";
    echo "<h1>Akták » " . $row['file_name'] . "</h1>";
    if(getUserRankPerm($_SESSION['badge_number']) >= 3 || $row['author'] == $_SESSION['badge_number']) {
        echo "<div style='display: inline;'>";
        echo "<a class='button-danger rem-file' style='float:right;' name='" . $row['file_name'] . "' id='$id'>Törlés</a>";
        echo "<a href='index.php?p=files&t=edit&id=" . $id . "' class='button-norm' style='float:right;'>Módosítás</a>";
        echo "</div>";
    }
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
            echo "<td><a href='index.php?p=users&t=view&id=" . $row['author'] . "'>" . RPName($row['p1']) . "</a></td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td><b>Kelt</b></td>";
            echo "<td>" . $row['timestamp'] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td><b>Utoljára szerkesztve</b></td>";
            echo "<td>" . RPName($row['p2']) . " - " . $row['edited'] . "</td>";
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
<script src='js/file_view.js'></script>
