<?php
if(getUserRankPerm($_SESSION['badge_number']) >= 3 || $row['author'] == $_SESSION['badge_number']) {
    if($result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author WHERE dbid='$id'")) {
        $row = mysqli_fetch_assoc($result);
        echo "<div id='fileview_content'>";
        echo "<h1>Akták » " . $row['file_name'] . "</h1>";
        echo "<br /><br />";
        echo "<table id='fileview_table'>";
            echo "<tr>";
                echo "<td><b>Akta sorszáma</b></td>";
                echo "<td><input type='text' value='" . $row['file_name'] . "'></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td><b>Megnevezés</b></td>";
                echo "<td><input type='text' value='" . $row['title'] . "'></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td colspan='2' style='text-align:center;'><b>Akta tartalma</b></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td colspan='2'>";
                    echo "<textarea name='editor1' id='editor1' rows='10' cols='80'></textarea><br />
                    <script>CKEDITOR.replace('editor1');CKEDITOR.config.width = '100%';
                    CKEDITOR.instances.editor1.setData('" . $row['text'] . "')</script>";
                echo "</td>";
            echo "</tr>";
        echo "</table>";
        echo "</div>";
    } else echo "<h1>Hiba történt!</h1>";
} else echo "<h1>Nana!</h1>";
?>
<script src='js/file_edit.js'></script>
