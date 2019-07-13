<?php
require("connect.inc.php");
function getRankName($rank) {
    $result = mysqli_query($mysql_id, "SELECT name FROM ranks WHERE dbid='" . $rank . "'");
    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}
?>
