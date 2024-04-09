<?php  
require 'function.php';
//koneksi dbs
$conn = mysqli_connect("localhost","root","","phpdasar");
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo 
       "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>;
        ";
    } else {
        "<script>
        alert('data gagal ditambahkan !');
        document.location.href = 'index.php';
        </script>;
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <h2>Form Input Mahasiswa</h2>
    <form action="" method="POST">

        <label for="Nama">Nama:</label><br>
        <input type="text" id="Nama" name="Nama" required><br>

        <label for="Nim">NIM:</label><br>
        <input type="text" id="Nim" name="Nim" required><br>

        <label for="Email">Email:</label><br>
        <input type="email" id="Email" name="Email" required><br>

        <label for="Jurusan">Jurusan:</label><br>
        <input type="text" id="Jurusan" name="Jurusan" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <br><br>
    <br><br>
    <a href="index.php">KEMBALI</a>
</body>

</html>