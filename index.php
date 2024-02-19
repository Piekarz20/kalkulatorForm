<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Skrypt</title>
</head>
<body>
<p>
    <?php
    if(isset($_GET['liczba1']) && isset($_GET['liczba2']) && isset($_GET['dzialanie'])) {
        $liczba1 = $_GET['liczba1'];
        $liczba2 = $_GET['liczba2'];
        $dzialanie = $_GET['dzialanie'];

        echo "liczba1: $liczba1, liczba2: $liczba2, dzialanie: $dzialanie"; // Debug

        switch ($dzialanie) {
            case "dodawanie":
                echo "Wynik dodawania $liczba1 i $liczba2 wynosi: " . ($liczba1 + $liczba2);
                break;

            case "odejmowanie":
                echo "Wynik odejmowania $liczba1 i $liczba2 wynosi: " . ($liczba1 - $liczba2);
                break;

            case "mnozenie":
                echo "Wynik mnozenia $liczba1 i $liczba2 wynosi: " . ($liczba1 * $liczba2);
                break;

            case "dzielenie":
                if ($liczba2 != 0) {
                    echo "Wynik dzielenia $liczba1 i $liczba2 wynosi: " . ($liczba1 / $liczba2);
                } else {
                    echo "Nie można dzielić przez zero!";
                }
                break;

            default:
                echo "Błąd";
        }
    } else {
        echo "Proszę podać wszystkie wymagane parametry!";
    }
    ?>
</p>
</body>
</html>
