<?php  
require 'function.php';

//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id nya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id",$conn)[0];

//koneksi dbs
$conn = mysqli_connect("localhost","root","","phpdasar");

 if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo 
       "<script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>;
        ";
    } else {
        "<script>
        alert('data gagal diubah !');
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
    <h2>Form Update Mahasiswa</h2>
    <form action="" method="POST">

        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

        <label for="Nama">Nama:</label><br>
        <input type="text" id="Nama" name="Nama" required value="<?= $mhs["Nama"]; ?>"><br>

        <label for="Nim">NIM:</label><br>
        <input type="text" id="Nim" name="Nim" required value="<?= $mhs["Nim"]; ?>"><br>

        <label for="Email">Email:</label><br>
        <input type="email" id="Email" name="Email" required value="<?= $mhs["Email"]; ?>"><br>

        <label for="Jurusan">Jurusan:</label><br>
        <input type="text" id="Jurusan" name="Jurusan" required value="<?= $mhs["Jurusan"]; ?>"><br><br>

        <button type="submit" name="submit">Update Data</button>
    </form>
    <br><br>
    <br><br>
    <a href="index.php">KEMBALI</a>
</body>

</html>