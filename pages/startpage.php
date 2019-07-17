<div id="startpage-widgets">
    <?php

    if(getUserRankPerm($_SESSION['badge_number']) >= 1) {
        echo "
            <div onclick='window.location.href = `index.php?p=minutes`;' class='startpage-widget'>
                <div class='title'>
                    Jegyzőkönyvek
                    <i class='fas fa-pen icon'></i>
                    <div class='description'>
                        Kihallgatási, helyszínelési jegyzőkönyvek
                    </div>
                </div>
            </div>
        ";
    }

    if(getUserRankPerm($_SESSION['badge_number']) >= 2) {
        echo "
            <div onclick='window.location.href = `index.php?p=files`;' class='startpage-widget'>
                <div class='title'>
                    Akták
                    <i class='far fa-clipboard icon'></i>
                    <div class='description'>
                        Nyomozati akták
                    </div>
                </div>
            </div>
        ";
    }
    ?>
</div>
