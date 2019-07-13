<?php
define("HOSTNAME","localhost");
define("USERNAME","robotzsaru");
define("PASSWORD","r1o2b3o4t5z6s7a8r9u0");
define("DATABASE","robotzsaru");
$mysql_id = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if (mysqli_connect_errno()) echo mysqli_connect_errno() . ": " . mysqli_connect_error();
mysqli_query($sql_id,"SET NAMES UTF8");
?>
