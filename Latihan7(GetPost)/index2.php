<?php  
// Periksa apakah semua parameter yang diperlukan sudah diset dalam URL
if (!isset($_GET["player_name"]) || 
    !isset($_GET["email"]) ||
    !isset($_GET["uuid"]) ||
    !isset($_GET["nope"]))
{
    // Jika tidak, arahkan pengguna kembali ke halaman index.php
    header("Location: index.php");
    exit; // Pastikan untuk keluar dari skrip setelah melakukan pengalihan header
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Player</title>
</head>
<body>
    <ul>
        <li> <b>Nama : </b> <?php echo $_GET["player_name"]; ?></li>
        <li> <b>Email : </b> <?php echo $_GET["email"]; ?></li>
        <li> <b>UUID : </b> <?php echo $_GET["uuid"]; ?></li>
        <li> <b>Phone Number : </b> <?php echo $_GET["nope"]; ?></li>
    </ul>
</body>
</html>
