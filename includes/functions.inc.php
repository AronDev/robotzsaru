<?php
function getRankName($rank) {
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT name FROM ranks WHERE dbid='" . $rank . "'");
    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}

function getUserName($badgeNum) {
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT playername FROM users WHERE badge_number='" . $badgeNum . "'");
    $row = mysqli_fetch_assoc($result);
    return $row['playername'];
}
?>
