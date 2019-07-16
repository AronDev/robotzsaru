<?php
if($result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author WHERE dbid='$id'")) {
    $row = mysqli_fetch_assoc($result);
    echo "<div id='files-content'>";
    echo "<a class='button-danger' style='float:right;'>Törlés</a><br /><br />";
    echo "<table id='files'>";
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
            echo "<td colspan='2'><b>Akta tartalma</b></td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td colspan='2'><br />" . $row['text'] . "<br /><br /></td>";
        echo "</tr>";
    echo "</table>";
    echo "</div>";
} else echo "<h1>Hiba történt!</h1>";
?>
