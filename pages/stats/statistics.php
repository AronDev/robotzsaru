<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Statisztikák</title>
    </head>
    <body>
        <div id="files-content" style='width: 30% !important;'>
            <h1>Statisztika</h1><br />

            <h3>Akta heti toplista</h3>
            <table id="files">
                <tr>
                    <th class='files-header'>Felhasználó</th>
                    <th class='files-header'>Darab</th>
                </tr>
                <?php
                $query = "
                SELECT f.author as author, u.playername as pn, COUNT(dbid) as pcs
                FROM files AS f
                INNER JOIN users AS u ON u.badge_number=f.author
                WHERE f.timestamp >= CURRENT_TIMESTAMP() - INTERVAL 7 DAY
                GROUP BY f.author
                ORDER BY pcs DESC
                ";
                $result = mysqli_query($mysql_id, $query);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='files-row'>";
                            echo "<td class='files-column'>" . $row['pn'] . "</td>";
                            echo "<td class='files-column'>" . $row['pcs'] . "</td>";
                        echo "</tr>";
                    }
                } else echo "<tr><td colspan='4'>Nem készült a héten akta!</td></tr>";
                ?>
            </table>

            <h3>Akta havi toplista</h3>
            <table id="files">
                <tr>
                    <th class='files-header'>Felhasználó</th>
                    <th class='files-header'>Darab</th>
                </tr>
                <?php
                $query = "
                SELECT f.author as author, u.playername as pn, COUNT(dbid) as pcs
                FROM files AS f
                INNER JOIN users AS u ON u.badge_number=f.author
                WHERE f.timestamp >= CURRENT_TIMESTAMP() - INTERVAL 1 MONTH
                GROUP BY f.author
                ORDER BY pcs DESC
                ";
                $result = mysqli_query($mysql_id, $query);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='files-row'>";
                            echo "<td class='files-column'>" . $row['pn'] . "</td>";
                            echo "<td class='files-column'>" . $row['pcs'] . "</td>";
                        echo "</tr>";
                    }
                } else echo "<tr><td colspan='4'>Nem készült a héten akta!</td></tr>";
                ?>
            </table>

            <h3>Akta mindenkori toplista</h3>
            <table id="files">
                <tr>
                    <th class='files-header'>Felhasználó</th>
                    <th class='files-header'>Darab</th>
                </tr>
                <?php
                $query = "
                SELECT f.author as author, u.playername as pn, COUNT(dbid) as pcs
                FROM files AS f
                INNER JOIN users AS u ON u.badge_number=f.author
                GROUP BY f.author
                ORDER BY pcs DESC
                ";
                $result = mysqli_query($mysql_id, $query);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='files-row'>";
                            echo "<td class='files-column'>" . $row['pn'] . "</td>";
                            echo "<td class='files-column'>" . $row['pcs'] . "</td>";
                        echo "</tr>";
                    }
                } else echo "<tr><td colspan='4'>Nem készült a héten akta!</td></tr>";
                ?>
            </table>
        </div>
    </body>
</html>
