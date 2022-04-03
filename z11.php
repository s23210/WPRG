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
function isPangram($string) {
    $string = strtolower($string);
    $string = str_replace(' ', '', $string);
    $alphabet = range('a', 'z');
    $string = str_split($string);
    $string = array_diff($string, $alphabet);
    if (empty($string)) {
        return "true";
    } else {
        return "false";
    }
}
$pangram = "The quick brown fox jumps over the lazy dog";
$not_a_pangram = "The quick brown fox jumps over the lazy dog.";
echo isPangram($pangram);
?>
</body>
</html>