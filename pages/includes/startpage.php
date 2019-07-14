<div id="startpage-widgets">
    <div onclick="window.location.href = 'index.php?p=activities';" class="startpage-widget">
        <div class='title'>
            Tevékenységek
            <div class=description>
                Előállítások, helyszíni bírságok, lefoglalások, stb..
            </div>
        </div>
        <div>
            <?php
            $result = mysqli_query($mysql_id, "SELECT title, users.playername FROM activities INNER JOIN users ON users.badge_number=activities.user ORDER BY timestamp DESC LIMIT 1");
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Legutóbbi tevékenység: " . $row['playername'] . " -> " . $row['title'];
            } else echo "Nincs legutóbbi tevékenység!";
            ?>
        </div>
    </div>

    <div onclick="window.location.href = 'index.php?p=files';" class="startpage-widget">
        <div class='title'>
            Akták
            <div class=description>
                Nyomozati akták
            </div>
        </div>
    </div>

    <div onclick="window.location.href = 'index.php?p=reports';" class="startpage-widget">
        <div class='title'>
            Jegyzőkönyvek
            <div class=description>
                Kihallgatási jegyzőkönyvek, helyszíni jegyzőkönyvek, stb..
            </div>
        </div>
    </div>
</div>
