
<?php
session_start();
if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counters</title>
</head>
<body>
<?php
echo '<form action="site.php" method="post">';
echo '<input type="submit" name="logout" value="Wyloguj">';
echo '</form>';

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}


echo '<p>Liczba odwiedzin (session counter): ' . $_SESSION['counter'] . '</p>';

if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
} else {
    $counter = 1;
}
setcookie('counter', $counter, time() + 3600);

echo '<p>Liczba odwiedzin (cookie counter): ' . $counter . '</p>';

}
else {
    echo 'Nie jesteś zalogowany';
}
?>
</body>
</html>

