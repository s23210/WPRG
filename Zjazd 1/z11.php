<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 11</title>
</head>
<body>
<?php
function isPangram($str) {
    $alphabet = range('a', 'z');
    $a_sentence = str_split(strtolower($str));
    return empty(array_diff($alphabet, $a_sentence));
}
$pangram = "The quick brown fox jumps over the lazy dog";
$not_a_pangram = "abc";
echo isPangram($not_a_pangram) ? "Yes" : "No";
?>
</body>
</html>