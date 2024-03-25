<!DOCTYPE html>

<head>
    <title>Database</title>
</head>
<body>
    
<!-- Database -->
<?php  
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
<!-- style -->
<style>
.tabel{
    border-collapse: collapse;
    width: 75%;
    text-align: center;
}
.tabel th,.tabel td{
    border: 1px solid black;
}
</style>


<!-- tabble -->
    <h3>Data Player : </h3>
    <table class="tabel">
        <tr>
            <th>No</th>
            <th>Player Name</th>
            <th>UUID</th>
            <th>Email</th>
            <th>Number Phone</th>
        </tr>
        <?php foreach ($dataplayer as $playerdt) : ?>
        <tr>
            <td> <?php echo $playerdt["no"]; ?></td>
            <td> <?php echo $playerdt["player_name"]; ?></td>
            <td> <?php echo $playerdt["UUID"]; ?></td>
            <td> <?php echo $playerdt["email"]; ?></td>
            <td> <?php echo $playerdt["phone_number"]; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>