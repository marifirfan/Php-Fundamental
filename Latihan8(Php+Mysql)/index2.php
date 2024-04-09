<?php  
//conection to database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data mahasiswa dari tabel phpdasar / query data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// 1. mysqli_fetch_row() -> mengembalikan array numerik
// 2. mysqli_fetch_assoc() -> mengembalikan array associative
// 3 mysqli_fetch_array() -> mengembalikan nilai numerik dan associative (keduanya)
// 4. mysqli_fetch_object() -> mengembalikan object


// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }
// var_dump($mhs);
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
        <?php while($row = mysqli_fetch_assoc($result)) :?>
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
        <?php endwhile;?>

    </table>
</body>

</html>