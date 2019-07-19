<div id="startpage-widgets">
    <?php

    if(getUserRankPerm($_SESSION['badge_number']) >= 1) {
        echo "
            <div onclick='window.location.href = `index.php?p=minutes`;' class='startpage-widget'>
                Jegyzőkönyvek
                <i class='fas fa-pen icon'></i>
                <div class='description'>
                    Kihallgatási, helyszínelési jegyzőkönyvek
                </div>
            </div>
        ";
    }

    if(getUserRankPerm($_SESSION['badge_number']) >= 2) {
        echo "
            <div onclick='window.location.href = `index.php?p=files`;' class='startpage-widget'>
                Akták
                <i class='far fa-clipboard icon'></i>
                <div class='description'>
                    Nyomozati akták
                </div>
            </div>
        ";
    }
    if(getUserRankPerm($_SESSION['badge_number']) >= 3) {
        echo "
            <div onclick='window.location.href = `index.php?p=stats`;' class='startpage-widget'>
                Statisztika
                <i class='fas fa-info-circle icon'></i>
                <div class='description'>
                    Robotzsaru statisztika
                </div>
            </div>
        ";
    }
    ?>
</div>
