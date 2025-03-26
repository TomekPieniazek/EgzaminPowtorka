<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka Publiczna</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <section class="baner"><h1>Biblioteka W książkowicach Wielkich</h1></section>
    <section class="s">
        <section class="lewy">
            <h3>Polecamy dzieła autorów</h3>
            <ol>
                <?php
                    $prompt = "SELECT imie, nazwisko from autorzy GROUP By nazwisko;";
                    $con = mysqli_connect("localhost", "root", "", "Biblioteka");
                    $result = $con->query($prompt);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li>" . $row['imie'] . ' ' . $row['nazwisko'] . "</li>";
                        }
                    }
                ?>
            </ol>
        </section>
        <section class="srodkowy">
            <h3>ul. Czytelnicza 25, Książkowice Wielkie</h3>
            <a href="sekretariat@biblioteka.pl">Skontaktuj się z nami</a>
            <img src="./biblioteka.png" alt="książki">
        </section>
            <section class="prawy">
                <section class="gorny">
                    <h3>Dodaj czytelnika</h3>
                    <form action="biblioteka.php" method="POST">
                        <label for="imie">Imię: </label>
                        <input type="text" name="imie">
                        <br>
                        <label for="nazwisko">Nazwisko: </label>
                        <input type="text" name="nazwisko">
                        <br>
                        <label for="symbol">Symbol: </label>
                        <input type="number" name="symbol">
                        <button type="submit">Wyślij</button>
                    </form> 
                </section>
                <section class="dolny">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $imie = $_POST['imie'];
                            $nazwisko = $_POST['nazwisko'];
                            $symbol = $_POST['symbol'];
                            $query = 'INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('.$imie.','.$nazwisko.','.$symbol.');'; 
                            $result = $con->query($query);
                            echo 'Czytelnik '.$imie.' '.$nazwisko.' '.'został(a) dodany do bazy danych';
                        }
                    ?>
                </section>
        </section>
    </section>
    <section class="stopka">Projekt strony: JA</section>
</body>
</html>