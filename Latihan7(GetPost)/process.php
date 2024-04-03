<?php
// Periksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari setiap field
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $hobi = implode(", ", $_POST["hobi"]); // Menggabungkan array hobi menjadi string
    $kota = $_POST["kota"];

    // Lakukan validasi atau pemrosesan data sesuai kebutuhan
    // Misalnya, simpan data ke database atau lakukan operasi lainnya
    
    // Contoh: Tampilkan data yang diterima dari form
    echo "<h2>Data yang Diterima:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
    echo "<p>Hobi: $hobi</p>";
    echo "<p>Kota: $kota</p>";
} else {
    // Jika form tidak dikirimkan, redirect pengguna kembali ke halaman form
    header("Location: form.html");
    exit; // Pastikan untuk keluar dari skrip setelah melakukan pengalihan header
}
?>
