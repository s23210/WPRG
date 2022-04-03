<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 9</title>
</head>
<body>
<?php
$tablica1 = array();
$tablica2 = array();
$iloczyn = 0;
for($i = 0; $i < 10; $i++){
    $tablica1[$i] = rand(1,10);
    $tablica2[$i] = rand(1,10);
}
echo 'Tablica 1: ';
for($i=0;$i<10;$i++){
    echo $tablica1[$i].' ';
}
echo '<br>';
echo 'Tablica 2: ';
for($i = 0; $i < 10; $i++){
    echo $tablica2[$i].' ';
}

if (count($tablica1) == count($tablica2) && count($tablica1) != 0 && count($tablica2) != 0){
    for($i = 0; $i < count($tablica1); $i++){
        $iloczyn = $iloczyn + ($tablica1[$i] * $tablica2[$i]);
    }
    echo '<br>';
    echo 'Iloczyn skalarny: '.$iloczyn;
}
else{
    echo '<br>';
    echo 'Nie można wykonać iloczynu skalarnego, ponieważ liczba elementów w tablicy 1 jest różna od liczby elementów w tablicy 2, lub są równe 0';
}
?>
</body>
</html>