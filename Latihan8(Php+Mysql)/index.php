<?php  
//menghubungkan connection berbeda file
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa",$conn);

?>


<!DOCTYPE html>

<head>
    <title>Admin Page</title>
</head>

<body>
    <h1> Daftar Mahasiswa</h1>

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
            <td><a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><?php echo $row["Nim"] ?></td>
            <td><?php echo $row["Nama"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td><?php echo $row["Jurusan"] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>

    </table>
</body>

</html>