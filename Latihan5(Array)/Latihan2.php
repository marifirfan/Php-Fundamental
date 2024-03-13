<?php  
$angka = [1,2,3,4,5,6,7,8,9,10,11,12];
$index = 0;
?>
<!-- html -->
<html>
    <head>
        <title> Latihan 5</title>
    </head>
    <body>
        <style>
            .kotak{
            height: 50px;
            width: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            font-family: tahoma;
            margin: 3px;
            float: left;
            }
            .clear{
            clear: both;
            height: 50px;
            width: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            font-family: tahoma;
            margin: 3px;
            float: left;
            }
        </style>

        <?php for ($i=0; $i < count($angka) ; $i++) : ?>
        <div class="kotak"><?php echo "$angka[$i]" ?></div>
        <?php  endfor; ?>

        <?php foreach ($angka as $angkas => $hasilangka) :?>
        <div class="clear"> <?php echo($hasilangka) ?> </div>
        <?php  endforeach;?>

        <?php echo"$angka[2]" ?>
        
    </body>
</html>