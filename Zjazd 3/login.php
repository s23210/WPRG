<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="login.php" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Zaloguj">
</form>

<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == 'admin' && $password == 'admin') {
        if (!isset($_SESSION['counter'])) {
            $_SESSION['counter'] = 0;
        }
        header('Location: site.php');
        exit;
    } else if ($login == '' && $password == '') {
        echo 'Wprowadź login i hasło';
    } else {
        echo 'Nieprawidłowy login lub hasło';
    }
}

if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
} else {
    $counter = 1;
}

setcookie('counter', $counter, time() + 3600);

echo '<p>Liczba odwiedzin (cookie counter): ' . $counter . '</p>';
?>
</body>
</html>
