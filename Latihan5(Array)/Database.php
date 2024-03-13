<!-- Variabel -->
<?php  
$mahasiswa = [
    ["Muhammad Arif Irfan", "202210370311030", "Teknik Informatika", "marifirfannn@gmail,com"],
    ["Nevin Alvaro", "202210370311032", "Teknik Informatika", "nevinalfaro@gmail,com"],
    ["Kevin Gaming", "202210370311036", "Teknik Informatika", "nevingaming@gmail,com"],
    ["Ridho Ahmad", "202210370311066", "Teknik Informatika", "ridhoahmadd123@gmail,com"],
    ["Ridho Ahmad", "202210370311066", "Teknik Informatika", "ridhoahmadd123@gmail,com"]
];
?>
<!-- html -->
<html>
    <head>
        <title>Latihan Database</title>
    </head>
    <body>
        <style>
            .title{
                background-color: aqua;
                text-align: center;
            }
            table {
                width: 50%;
                margin: 20px auto;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
                height: auto;
                width: 120px;
            }
        </style>
        <div class="title">
            <h1>Data Mahasiswa</h1>
        </div>
        <?php foreach ($mahasiswa as $mhs => $value) :?>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?php echo $value[0]; ?></td>
                    <td><?php echo $value[1]; ?></td>
                    <td><?php echo $value[2]; ?></td>
                    <td><?php echo $value[3]; ?></td>
                </tr>
            </table>
        <?php endforeach; ?>
    </body>
</html>
