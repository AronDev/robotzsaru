<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Főoldal</title>
    </head>
    <body>
        <div id="mainpage-navbar">
            <div id="user-info">
                <?php echo $_SESSION['badge_number'] . " - " . RPName(getUserName($_SESSION['badge_number'])); ?>
            </div>
        </div>
        <div id="mainpage-main-content">
            <?php
            // TODO
            ?>
        </div>
    </body>
</html>
