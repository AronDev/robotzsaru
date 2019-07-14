<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Főoldal</title>
    </head>
    <body>
        <div id="mainpage-navbar">
            <div id="page-info" style="cursor: pointer;" onclick="window.location.href = 'index.php';">
                Robotzsaru
            </div>
            <div id="user-info">
                <?php echo $_SESSION['badge_number'] . " - " . RPName(getUserName($_SESSION['badge_number'])); ?>
            </div>
        </div>
        <div id="mainpage-main-content">
            <?php
            $page = isset($_GET['p']) ? $_GET['p'] : '';
            $type = isset($_GET['t']) ? $_GET['t'] : '';
            switch($page) {
                case 'mainpage': {
                    include("pages/includes/startpage.php");
                    break;
                } default: include("pages/includes/startpage.php");
            }
            ?>
        </div>
    </body>
</html>
