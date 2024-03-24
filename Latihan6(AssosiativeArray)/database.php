<!DOCTYPE html>

<head>
    <title>Latihan 6.1</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            margin: 3px;
            background-color: cadetblue;
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
    $angka = [[1,2,3],[4,5,6],[7,8,9]];
    ?>
    <?php foreach ($angka as $array1) : ?>
        <?php foreach ($array1 as $array2) : ?>
    <div class="kotak"> <?php echo $array2; ?></div>
            <?php endforeach; ?>
            <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>