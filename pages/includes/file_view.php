<?php
if($result = mysqli_query($mysql_id, "SELECT * FROM files WHERE dbid='$dbid'")) {

} else echo "<h1>Hiba történt!</h1>";
?>
