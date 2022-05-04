<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>
<?php
$a = 2;
$b = 4;
$c = 5;
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Trójkąt da się zbudować.';
} else {
    echo 'BŁĄD';
}
?>
</body>
</html>