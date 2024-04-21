<?php  

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Fungsi untuk melakukan query ke database
function query($query, $conn) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))  {
        $rows[] = $row;
    }
    return $rows;
}

// Memeriksa apakah form registrasi telah dikirim
if(isset($_POST["register"])){
    // Panggil fungsi registrasi dengan data dari $_POST
    // dan cek apakah hasilnya lebih dari 0
    if(registrasi($_POST) > 0 ){
        echo "<script>alert('user baru berhasil ditambahkan!')</script>";
    }
}

// Fungsi untuk menambahkan data mahasiswa
function tambah($data){
    global $conn;
    // Ambil data dari tiap elemen dalam form
    $Nim = htmlspecialchars($data["Nim"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data["Jurusan"]);

    // Query untuk insert data
    $query = "INSERT INTO mahasiswa 
    VALUES ('','$Nama','$Nim','$Email','$Jurusan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi untuk menghapus data mahasiswa
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Fungsi untuk mengubah data mahasiswa
function ubah($data){
    global $conn;

    $id = $data["id"];
    $Nim = htmlspecialchars($data["Nim"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data["Jurusan"]);

    $query = "UPDATE mahasiswa SET 
                Nim = '$Nim',
                Nama = '$Nama',
                Email = '$Email',
                Jurusan = '$Jurusan'
              WHERE id = $id";
              
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

// Fungsi untuk melakukan pencarian data mahasiswa
function cari($keyword){
    global $conn;
    $query = "SELECT * FROM mahasiswa 
                WHERE nama LIKE '%$keyword%' OR 
                      Nim LIKE '%$keyword%' OR
                      Email LIKE '%$keyword%' OR
                      Jurusan LIKE '%$keyword%'";

    // Eksekusi query dengan koneksi yang telah disediakan
    return query($query, $conn);
}

// Fungsi untuk melakukan registrasi user baru
function registrasi($data){
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah terdaftar!')</script>";
        return false;
    }

    // Cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return; // Hentikan eksekusi fungsi jika konfirmasi password tidak sesuai
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}

?>
