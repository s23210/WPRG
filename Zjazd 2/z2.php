<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
<form action="z2.php" method="post">
    <label for="name">Imię:</label>
    <input type="text" name="name" id="name">
    <br>
    <br>
    <label for="surname">Nazwisko:</label>
    <input type="text" name="surname" id="surname">
    <br>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email">
    <br>
    <br>
    <label for="phone">Telefon:</label>
    <input type="text" name="phone" id="phone">
    <br>
    <br>
    <label for="date">Data:</label>
    <input type="date" name="date" id="date">
    <br>
    <br>
    <label for="time">Godzina:</label>
    <input type="time" name="time" id="time">
    <br>
    <br>
    <label for="people">Ilość osób:</label>
    <input type="number" name="people" id="people">
    <br>
    <br>
    <label for="message">Wiadomość:</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <br>
    <br>
    <input type="submit" value="Wyślij">
</form>

<?php
if (isset($_POST['name'])) {
    echo '<h1>Dane z formularza</h1>';
    echo '<p>Imię: ' . $_POST['name'] . '</p>';
    echo '<p>Nazwisko: ' . $_POST['surname'] . '</p>';
    echo '<p>E-mail: ' . $_POST['email'] . '</p>';
    echo '<p>Telefon: ' . $_POST['phone'] . '</p>';
    echo '<p>Data: ' . $_POST['date'] . '</p>';
    echo '<p>Godzina: ' . $_POST['time'] . '</p>';
    echo '<p>Ilość osób: ' . $_POST['people'] . '</p>';
    echo '<p>Wiadomość: ' . $_POST['message'] . '</p>';
}
?>
</body>
</html>