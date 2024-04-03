<!DOCTYPE html>

<?php
//    $_GET
$dataplayer = [
    ["no" => 1, 
    "player_name" => "izukazumi", 
    "email" => "izukazumi@gmail,com",
    "UUID" => 39812391, 
    "phone_number" => "08712123123"],

    ["no" => 2, 
    "player_name" => "mofumofu", 
    "UUID" => 1231342342, 
    "email" => "mofumofu@gmail,com",
    "phone_number" => "087612351277"],

    ["no" => 3, 
    "player_name" => "ken konsilk", 
    "UUID" => 5434253765, 
    "email" => "kenkonsilk@gmail,com",
    "phone_number" => "0889721318"]
];
?>

<head>
    <title>Latihan 8</title>
</head>
<body>
    <ul>
    <?php foreach ($dataplayer as $data) : ?>
        <a href="index2.php?player_name=<?php echo $data["player_name"];?>&email=<?php echo $data["email"];?>&uuid=<?php echo $data["UUID"];?>&nope=<?php echo $data["phone_number"];?>">
            <li><?php echo $data["player_name"]; ?></li>
        </a>
    <?php endforeach;?>
    </ul>
</body>
</html>
