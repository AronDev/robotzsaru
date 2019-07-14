<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Tevékenységnapló</title>
    </head>
    <body>
        <h1>Tevékenységnapló</h1>
        <?php
        $result = mysqli_query($mysql_id, "SELECT activites.*, users.name FROM activities INNER JOIN users ON users.dbid=activities.user ORDER BY timestamp DESC");
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='activity-widget'>";
                    echo "<div class='title'>";
                    echo $row['title'];
                    echo "</div>";
                    echo "<div class='description'>";
                    echo "Intézkedő rendőr: " . $row['name'];
                    echo "</div>";
                    echo "<div class='message'>";
                    echo substr($row['text'], 0, 30);
                    echo "</div>";
                echo "</div>";
            }
        } else echo "Nincsenek tevékenységek!";
        ?>
    </body>
</html>
