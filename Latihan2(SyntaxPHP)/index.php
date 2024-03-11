<?php 
/*
Standard Output
echo, print
print_r -> khusus untuk array
var_dump -> tampilkan isi variabel

echo"Muhammad Arif Irfan - ";
var_dump("Muhammad Arif Irfan");
echo 123 ;
var_dump(1234567890);
echo true;

*/

//variabel dan tipe data ($variabel)
//Operator (+ - * / %)

//assignment (=, +=, -=, /=, %=, .=)

// perbandingan (sama seperti bahasa lainnya)

$nama = " Muhammad Arif Irfan";
$umur = 20;
$hasil = 2+2;
$x = 5;
$x += 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan2</title>
</head>
<body>
    <h1>Latihan 2 - <?php echo"Syntax Php"; ?></h1>
    <p>Halo Perkenalkan Nama Saya<?php echo $nama; ?> umur saya <?php
    echo $umur." ".$hasil;
    ?> 
    tahun </p>
    <p>
        <?php 
        echo $x." ";
        var_dump(1> $x);
        ?>
    </p>
</body>
</html>