<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Felhasználók</title>
    </head>
    <body>
        <?php
        if(getUserRankPerm($_SESSION['badge_number']) >= 4) {
            echo "<div id='files-content'>
                <h1>Elbírálásra váró felhasználók</h1><br />
                <table id='files'>
                    <tr>
                        <th class='files-header'>Jelvényszám</th>
                        <th class='files-header'>Név</th>
                        <th class='files-header'>Rang</th>
                        <th class='files-header'>Művelet</th>
                    </tr>";
                    $result = mysqli_query($mysql_id, "SELECT u.badge_number, u.playername, r.name FROM users AS u INNER JOIN ranks AS r ON r.dbid=u.rank WHERE active='1' ORDER BY playername ASC");
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr class='files-row' id='u-tr" . $row['badge_number'] . "'>";
                                echo "<td class='files-column'>" . $row['badge_number'] . "</td>";
                                echo "<td class='files-column'>" . RPName($row['playername']) . "</td>";
                                echo "<td class='files-column'>" . $row['name'] . "</td>";
                                echo "<td class='files-column'>";
                                    echo "coming";
                                echo "</td>";
                            echo "</tr>";
                        }
                    } else echo "<tr><td colspan='4'  class='files-column' style='text-align:center;'>Nincsenek felhasználók!</td></tr>";
                    echo "
                    <tr>
                        <th class='files-header'>Jelvényszám</th>
                        <th class='files-header'>Név</th>
                        <th class='files-header'>Rang</th>
                        <th class='files-header'>Művelet</th>
                    </tr>
                </table>
            </div>";
        } else echo "<h1>Nincs jogosultságod az oldal megtekintéséhez!</h1>";
        ?>
        <script src='js/pendinguser.js'></script>
    </body>
</html>
