<?php
define("HOSTNAME","localhost");
define("USERNAME","aron");
define("PASSWORD","ArOn2002Sunwell1");
define("DATABASE","insiderpg");
$mysql_id = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if (mysqli_connect_errno()) echo mysqli_connect_errno() . ": " . mysqli_connect_error();
mysqli_query($sql_id,"SET NAMES UTF8");
?>
