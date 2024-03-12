<?php  
function salam($nama,$waktu){
    return "Selamat Datang, $nama ! , $waktu";
}

?>
<!-- Html -->
<html>
    <head>
        <title> Latihan4</title>
    </head>
    <body>
        <h1 style="font-family: tahoma;"><?= salam("admin", date("l, m - M - Y")); ?></h1>
    </body>
</html>