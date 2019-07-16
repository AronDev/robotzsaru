<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Akták</title>
    </head>
    <body>
        <h1>Akták</h1><br />
        ÚJ AKTA TODO
        <table id="files" border="1px">
            <tr>
                <th>Akta</th>
                <th>Időpont</th>
                <th>Szerző</th>
                <th>Megnevezés</th>
            </tr>
            <?php
            $result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author ORDER BY timestamp DESC");
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td>" . $row['file_name'] . "</td>";
                        echo "<td>" . $row['timestamp'] . "</td>";
                        echo "<td>" . $row['playername'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                    echo "</tr>";
                }
            } else echo "<tr><td colspan='4'>Nincsenek akták!</td></tr>";
            ?>
        </div>
    </body>
</html>
