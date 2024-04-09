<?php  
//conection to database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data mahasiswa dari tabel phpdasar / query data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// 1. mysqli_fetch_row() -> mengembalikan array numerik
// 2. mysqli_fetch_assoc() -> mengembalikan array associative
// 3 mysqli_fetch_array() -> mengembalikan 
// 4. mysqli_fetch_object() -> mengembalikan
$mhs = mysqli_fetch_assoc($result);
var_dump($mhs);
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
        <tr>
            <td>1</td>
            <td><a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>202210370311030</td>
            <td>Muhammad arif irfan</td>
            <td>marifirfann@gmail.com</td>
            <td>teknik informatika</td>
        </tr>

    </table>
</body>

</html>