<?php  
//menghubungkan connection berbeda file
require 'function.php'; //-> memanggil file function , bisa require / include
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC",$conn);


// Saat tombol cari diklik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>


<!DOCTYPE html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <h1> Daftar Mahasiswa</h1>

        <a class="text-tambah" href="tambah.php">Tambah Data Mahasiswa</a>
        <br><br>

        <form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword Pencarian..." autocomplete="off" id="keyword">
    <button type="submit" name="cari">Search</button>
</form>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <!-- tr data -->
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">edit</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
                </td>
                <td><?php echo $row["Nim"] ?></td>
                <td><?php echo $row["Nama"] ?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><?php echo $row["Jurusan"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach;?>

        </table>

    </div>

</body>

</html>