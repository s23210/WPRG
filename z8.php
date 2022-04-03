<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 8</title>
</head>
<body>
<?php
    $x = 7;
    $y = 3;
    $z = 12;

    if ($x < $y) {
        if ($y < $z) {
            echo $x . ' ' . $y . ' ' . $z . PHP_EOL . $z . ' ' . $y . ' ' . $x;
        } elseif ($x < $z) {
            echo $x . ' ' . $z . ' ' . $y . PHP_EOL . $y . ' ' . $z . ' ' . $x;
        } else {
            echo $z . ' ' . $x . ' ' . $y . PHP_EOL . $y . ' ' . $x . ' ' . $z;
        }
    } elseif ($y < $z) {
        if ($x < $z) {
            echo $y . ' ' . $x . ' ' . $z . PHP_EOL . $z . ' ' . $x . ' ' . $y;
        } else {
            echo $y . ' ' . $z . ' ' . $x . PHP_EOL . $x . ' ' . $z . ' ' . $y;
        }
    } else {
        if ($x < $y) {
            echo $z . ' ' . $x . ' ' . $y . PHP_EOL . $y . ' ' . $x . ' ' . $z;
        } else {
            echo $z . ' ' . $y . ' ' . $x . PHP_EOL . $x . ' ' . $y . ' ' . $z;
        }
    }
?>
</body>
</html>