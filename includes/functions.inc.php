<?php
function getRankName($rank) {
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT name FROM ranks WHERE dbid='" . $rank . "'");
    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}
function getDivName($div) {
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT name FROM divisions WHERE dbid='" . $div . "'");
    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}

function getUserName($badgeNum) {
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT playername FROM users WHERE badge_number='" . $badgeNum . "'");
    $row = mysqli_fetch_assoc($result);
    return $row['playername'];
}

function getUserDivName($badgeNum, $type = 0) { // 0 - name | 1 - sname
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT name, sname FROM divisions WHERE dbid=(SELECT division FROM users WHERE badge_number='" . $badgeNum . "')");
    $row = mysqli_fetch_assoc($result);
    return $type == 0 ? $row['name'] : $row['sname'];
}

function getUserRankName($badgeNum) {
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT name FROM ranks WHERE dbid=(SELECT rank FROM users WHERE badge_number='" . $badgeNum . "')");
    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}

function getUserRankPerm($badgeNum) {
    require("connect.inc.php");
    $result = mysqli_query($mysql_id, "SELECT perm FROM ranks WHERE dbid=(SELECT rank FROM users WHERE badge_number='" . $badgeNum . "')");
    $row = mysqli_fetch_assoc($result);
    return $row['perm'];
}

function RPName($name) {
    return str_replace("_", " ", $name);
}
?>
