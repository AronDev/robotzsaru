<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Akták</title>
    </head>
    <body>
        <h1>Akták</h1><br />
        ÚJ AKTA TODO
        <table id="files">
            <tr>
                <th class='files-header'>Akta</th>
                <th class='files-header'>Időpont</th>
                <th class='files-header'>Szerző</th>
                <th class='files-header'>Megnevezés</th>
            </tr>
            <?php
            $result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author ORDER BY timestamp DESC");
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td class='files-row'>" . $row['file_name'] . "</td>";
                        echo "<td class='files-row'>" . $row['timestamp'] . "</td>";
                        echo "<td class='files-row'>" . $row['playername'] . "</td>";
                        echo "<td class='files-row'>" . $row['title'] . "</td>";
                    echo "</tr>";
                }
            } else echo "<tr><td colspan='4'>Nincsenek akták!</td></tr>";
            ?>
        </div>
    </body>
</html>
