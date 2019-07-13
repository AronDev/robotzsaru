<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    </head>
</html>
<?php
session_start();
require("connect.inc.php");

$badgeNum = mysqli_real_escape_string($mysql_id, $_POST["badgeNum"]);
$password = mysqli_real_escape_string($mysql_id, $_POST["password"]);

$pwHash = hash('sha512', $password);

$query = "SELECT password FROM users WHERE badge_num='" . $badgeNum . "' LIMIT 1";
$result = mysqli_query($mysql_id, $query);
$count = mysql_num_rows($result);
$rows = mysqli_fetch_assoc($result);
if($count == 1) { // Ha létezik az adott jelvényszámmal felhasználó
    if($rows['password'] == $pwHash) { // Ha a jelszó megegyező
        // Adatok betöltése
        $_SESSION['logged'] = true;
        $_SESSION['badge_number'] = $badgeNum;

        header("Refresh: 0, url=index.php");
    } else {
        echo "
        <script>
        swal({
        title: 'Hibás jelszó',
        type: 'error',
        html: `A megadott jelszó hibás!`,
        confirmButtonText: 'Oké',
        })
        </script>
        ";
    }
} else {
    echo "
    <script>
    swal({
    title: 'Nincs ilyen jelvényszám',
    type: 'error',
    html: `A megadott jelvényszám nem létezik!`,
    confirmButtonText: 'Oké',
    })
    </script>
    ";
}
?>
