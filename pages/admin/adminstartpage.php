<div id="startpage-widgets">
    <?php

    if(getUserRankPerm($_SESSION['badge_number']) >= 3) {
        $result = mysqli_query($mysql_id, "SELECT COUNT(badge_number) as pcs FROM users WHERE active=0");
        $row = mysqli_fetch_assoc($result);
        echo "
            <div onclick='window.location.href = `index.php?p=admin&t=newusers`;' class='startpage-widget'>
                Elfogadásra váró felhasználók
                <i class='far fa-clock icon'></i>
                <div class='description'>
                    Elfogadásra váró felhasználók: " . $row['pcs'] . "
                </div>
            </div>
        ";
    }

    if(getUserRankPerm($_SESSION['badge_number']) >= 4) {
        echo "
            <div onclick='window.location.href = `index.php?p=admin&t=users`;' class='startpage-widget'>
                Felhasználólista
                <i class='far fa-user icon'></i>
                <div class='description'>
                    Elfogadott felhasználók megtekintése és kezelése
                </div>
            </div>
        ";
    }

    ?>
</div>
