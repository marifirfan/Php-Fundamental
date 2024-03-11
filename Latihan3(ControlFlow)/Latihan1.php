<!-- 
(Perularangan)
1. For
2. While
3. Do While
4. For Each
-->

<?php

// Looping With For
for ($i=0; $i < 5; $i++) { 
    echo"Print 1 <br>";
}

echo "<br>";
//Looping With While
$a = 1;
while ($a <= 5) {
    echo"Print 2 <br>";
    $a++;
}
echo "<br>";

//Looping with Do While
$x = 1;
do {
    echo"Print3 <br>";
    $x++;
} while ($x <= 5);
echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3</title>
    <style>
        .warnabaris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1px" cellpadding="10" cellspacing="0">
        <?php 
        for ($i=0; $i < 5; $i++) : ?>
            <?php if($i % 2 == 0) : ?>
            <tr class="warnabaris">
            <?php else : ?>
                    <tr>
            <?php endif; ?>
                <?php for ($j=0; $j < 5; $j++) :?>
                    <td >
                        <?="$i,$j";?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
</body>
</html>