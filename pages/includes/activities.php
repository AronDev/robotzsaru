<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Tevékenységnapló</title>
    </head>
    <body>
        <h1>Tevékenységnapló</h1><br />
        <?php
        $result = mysqli_query($mysql_id, "SELECT activities.*, users.playername FROM activities INNER JOIN users ON users.badge_number=activities.user ORDER BY timestamp DESC");
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='activity-widget'>";
                    echo "<div class='title'>";
                    echo $row['title'];
                    echo "<br />" . $row['playername'];
                    echo "</div>";
                    echo "<div class='description'>";

                    echo "</div>";
                    echo "<div class='message'>";
                    echo substr($row['text'], 0, 30) . "...";
                    echo "</div>";
                echo "</div>";
            }
        } else echo "Nincsenek tevékenységek!";
        ?>
    </body>
</html>
