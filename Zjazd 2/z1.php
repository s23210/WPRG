<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
<form action="z1.php" method="post">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="=">
</form>
<?php
if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operation'])) {
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case '+':
                echo $number1 + $number2;
                break;
            case '-':
                echo $number1 - $number2;
                break;
            case '*':
                echo $number1 * $number2;
                break;
            case '/':
                echo $number1 / $number2;
                break;
        }
    } else {
        echo "Podaj liczby";
    }
}
?>
</body>
</html>