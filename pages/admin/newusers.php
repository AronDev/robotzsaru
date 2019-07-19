<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Elfogadásra váró</title>
    </head>
    <body>
        <div id="files-content">
            <h1>Akták</h1><br />
            <input class='search' type='text' id='f_search' onkeyup='search_fileName()' placeholder='Keresés sorszám alapján' style='width: 20%'>
            <a class='button-primary' href='index.php?p=files&t=new' style='float:right;'>Új akta</a><br /><br />
            <table id="files">
                <tr>
                    <th class='files-header'>Jelvényszám</th>
                    <th class='files-header'>Név</th>
                    <th class='files-header'>Regisztráció</th>
                    <th class='files-header'>Művelet</th>
                </tr>
                <?php
                $result = mysqli_query($mysql_id, "SELECT badge_number, playername, registered as pcs FROM users WHERE active='0' ORDER BY timestamp DESC");
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='files-row' id='u-tr" . $row['badge_number'] . "'>";
                            echo "<td class='files-column'>" . $row['badge_number'] . "</td>";
                            echo "<td class='files-column'>" . $row['playername'] . "</td>";
                            echo "<td class='files-column'>" . $row['registered'] . "</td>";
                            echo "<td class='files-column'>";
                                echo "<a class='accept-user' id='" . $row['badge_number'] . "'><i class='fas fa-check'></i></a>";
                                echo "<a class='decline-user' id='" . $row['badge_number'] . "'><i class='fas fa-ban'></i></a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                } else echo "<tr><td colspan='4'>Nincsenek elfogadásra váró felhasználók</td></tr>";
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
