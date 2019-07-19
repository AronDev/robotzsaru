<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Elfogadásra váró</title>
    </head>
    <body>
        <div id="files-content">
            <h1>Elbírálásra váró felhasználók</h1><br />
            <table id="files">
                <tr>
                    <th class='files-header'>Jelvényszám</th>
                    <th class='files-header'>Név</th>
                    <th class='files-header'>Regisztráció</th>
                    <th class='files-header'>Művelet</th>
                </tr>
                <?php
                $result = mysqli_query($mysql_id, "SELECT badge_number, playername, registered FROM users WHERE active='0' ORDER BY registered DESC");
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='files-row' id='u-tr" . $row['badge_number'] . "'>";
                            echo "<td class='files-column'>" . $row['badge_number'] . "</td>";
                            echo "<td class='files-column'>" . RPName($row['playername']) . "</td>";
                            echo "<td class='files-column'>" . $row['registered'] . "</td>";
                            echo "<td class='files-column'>";
                                echo "<a class='accept-user icon-button-confirm' id='" . $row['badge_number'] . "'><i class='fas fa-check'></i></a>";
                                echo "<a class='decline-user icon-button-danger' id='" . $row['badge_number'] . "'><i class='fas fa-ban'></i></a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                } else echo "<tr><td colspan='4' style='text-align:center;'>Nincsenek elfogadásra váró felhasználók</td></tr>";
                ?>
                <tr>
                    <th class='files-header'>Jelvényszám</th>
                    <th class='files-header'>Név</th>
                    <th class='files-header'>Regisztráció</th>
                    <th class='files-header'>Művelet</th>
                </tr>
            </table>
        </div>
        <script src='js/file_view.js'></script>
    </body>
</html>
