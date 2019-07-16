<?php
if($result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author WHERE dbid='$id'")) {
    $row = mysqli_fetch_assoc($result);
    echo "<div id='fileview_content'>";
    echo "<h1>Akták » " . $row['file_name'] . "</h1>";
    echo "<div style='display: inline;'>";
    echo "<a class='button-danger' style='float:right;'>Törlés</a>";
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

<div id='fileview_content'>
<h1>Új akta</h1>
<table id='fileview_table'>
    <tr>
        <td><b>Akta sorszáma</b></td>
        <td><input id='inputFileName'></td>
    </tr>
    <tr>
        <td><b>Megnevezés</b></td>
        <td><input id='inputTitle'></td>
    </tr>
    <tr>
        <td colspan='2' style='text-align:center;'><b>Tartalom</b></td>
    </tr>
    <tr>
        <td colspan='2'>
            <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea><br />
            <script>CKEDITOR.replace('editor1');CKEDITOR.config.width = '100%';</script>
        </td>
    </tr>
</table>
</div>
