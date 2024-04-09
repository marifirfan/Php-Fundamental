<?php  

//conection to database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query, $conn) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))  {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $Nim = htmlspecialchars($data["Nim"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data["Jurusan"]);

     //query insert data
    $query = "INSERT INTO mahasiswa 
    VALUES ('','$Nama','$Nim','$Email','$Jurusan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>