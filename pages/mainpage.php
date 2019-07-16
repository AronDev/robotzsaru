<html>
    <head>
        <title><?php echo $WEBPAGE_NAME; ?> - Főoldal</title>
    </head>
    <body>
        <div id="mainpage-navbar">
            <div id="page-info" style="cursor: pointer;" onclick="window.location.href = 'index.php';">
                <?php echo $WEBPAGE_NAME; ?>
            </div>
            <div id="user-info">
                <?php echo $_SESSION['badge_number'] . " - " . RPName(getUserName($_SESSION['badge_number'])); ?>
            </div>
        </div>
        <div id="mainpage-main-content">
            <?php
            $page = isset($_GET['p']) ? $_GET['p'] : '';
            $type = isset($_GET['t']) ? $_GET['t'] : '';
            $dbid = isset($_GET['id']) ? $_GET['id'] : '';
            switch($page) {
                case 'mainpage': {
                    include("pages/includes/startpage.php");
                    break;
                } case 'files': {
                    switch($type) {
                        case 'view': {
                            include("pages/includes/file_view.php");
                            break;
                        } default: include("pages/includes/files.php");
                    }
                    break;
                } default: include("pages/includes/startpage.php");
            }
            ?>
        </div>
    </body>
</html>
