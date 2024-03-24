<!DOCTYPE html>
<head>
    <title>Latihan 6</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color:burlywood;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.7s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>

    <?php  
    $angka = [1,2,3,4,5,6,7,8,9,10];
    ?>

    <?php foreach ($angka as $a) :?>
    <div class="kotak"> <?= $a; ?> </div>  
    <?php  endforeach; ?>
    <div class="clear"></div>
</body>
</html>