<?php
include("credentials.inc.php");
$mysql_id = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if (mysqli_connect_errno()) echo mysqli_connect_errno() . ": " . mysqli_connect_error();
mysqli_query($mysql_id, "SET NAMES UTF8");
?>
