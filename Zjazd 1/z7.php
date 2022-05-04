<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 7</title>
</head>
<body>
<?php
// Napisz program, który dla podanej liczby z odpowiedniego zakresu wyświetli jaki to miesiąc i ile ma on dni.
$liczba = rand(1, 12);
switch ($liczba) {
    case 1:
        echo "Styczeń ma 31 dni";
        break;
    case 2:
        echo "Luty ma 28 dni";
        break;
    case 3:
        echo "Marzec ma 31 dni";
        break;
    case 4:
        echo "Kwiecień ma 30 dni";
        break;
    case 5:
        echo "Maj ma 31 dni";
        break;
    case 6:
        echo "Czerwiec ma 30 dni";
        break;
    case 7:
        echo "Lipiec ma 31 dni";
        break;
    case 8:
        echo "Sierpień ma 31 dni";
        break;
    case 9:
        echo "Wrzesień ma 30 dni";
        break;
    case 10:
        echo "Październik ma 31 dni";
        break;
    case 11:
        echo "Listopad ma 30 dni";
        break;
    case 12:
        echo "Grudzień ma 31 dni";
        break;
    default:
        echo "BŁĄD";
        break;
}
?>
</body>
</html>