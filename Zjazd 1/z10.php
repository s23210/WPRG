<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 10</title>
</head>
<body>
<?php
$n = 3;

for ($a = 1; $a <= $n; ++$a) {
    for ($b = 1; $b <= $a; ++$b) {
        echo '*';
    }
    echo '<br>';
}
for ($a = 1; $a <= $n; ++$a) {
    for ($b = $n; $b >= $a; --$b) {
        echo '*';
    }
    echo '<br>';
}
for ($a = $n; $a >= 1; --$a) {
    for ($b = $n; $b > $a; --$b) {
        echo '&ensp;';
    }
    for ($c = 1; $c <= $a; ++$c) {
        echo '*';
    }
    echo '<br>';
}
for ($a = 1; $a <= $n; ++$a) {
    for ($b = $n; $b > $a; --$b) {
        echo '&ensp;';
    }
    for ($c = 1; $c <= $a; ++$c) {
        echo '*';
    }
    if ($a != $n) {
        echo '<br>';
    }
}
?>
</body>
</html>