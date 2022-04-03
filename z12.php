<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 12</title>
</head>
<body>
<?php
$tablica = array();
$a = 4;
$b = 4;

if ($a != $b) {
    echo "BŁĄD";
    return;
}

for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $b; $j++) {
        $tablica[$i][$j] = rand(1, 100);
    }
}


for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $b; $j++) {
        echo $tablica[$i][$j] . " ";
    }
    echo "\n";
}

echo "\n\n\n\n";

for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $b; $j++) {
        echo $tablica[$j][$i] . " ";
    }
    echo "\n";
}


?>
</body>
</html>