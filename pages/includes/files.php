<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Akták</title>
    </head>
    <body>
        <h1>Akták</h1><br />
        <a class='new-button' style='float:right;'>Új akta</a><br />
        <table id="files">
            <tr>
                <th class='files-header'>Akta</th>
                <th class='files-header'>Időpont</th>
                <th class='files-header'>Szerző</th>
                <th class='files-header'>Megnevezés</th>
                <th class='files-header'>Művelet</th>
            </tr>
            <?php
            $result = mysqli_query($mysql_id, "SELECT files.*, users.playername FROM files INNER JOIN users ON users.badge_number=files.author ORDER BY timestamp DESC");
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class='files-row'>";
                        echo "<td class='files-column'>" . $row['file_name'] . "</td>";
                        echo "<td class='files-column'>" . $row['timestamp'] . "</td>";
                        echo "<td class='files-column'>" . $row['playername'] . "</td>";
                        echo "<td class='files-column'>" . $row['title'] . "</td>";
                        echo "<td class='files-column'><a href='index.php?p=files&t=view&dbid=" . $row['dbid'] . "'><i class='far fa-eye icon'></i></a></td>";
                    echo "</tr>";
                }
            } else echo "<tr><td colspan='4'>Nincsenek akták!</td></tr>";
            ?>
        </div>
    </body>
</html>
