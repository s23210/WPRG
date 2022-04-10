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
$b = 10;

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

$tablica2 = array();
for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $b; $j++) {
        $tablica2[$j][$i] = $tablica[$i][$j];
    }
    echo "\n";
}
for ($i = 0; $i < $b; $i++) {
    for ($j = 0; $j < $a; $j++) {
        echo $tablica2[$i][$j] . " ";
    }
    echo "\n";
}


?>
</body>
</html>