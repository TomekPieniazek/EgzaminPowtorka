<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link href="styl.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <main>
        <div class="lewe">
            <div class="menu">
                <a href="peruwianka.php">Rasa Peruwianka</a>
                <a href="american.php">Rasa American</a>
                <a href="crested.php">Rasa Crested</a>
            </div>
            <div class="main">
                <img src="../pliki/peruwianka.jpg" alt="Świnka morska rasy peruwianka">
                <?php
                    $con = mysqli_connect("localhost","root","","hodowla");
                    $prompt = 'SELECT DISTINCT s.data_ur, s.miot, r.rasa FROM swinki as s JOIN rasy as r ON s.rasy_id = r.id where s.rasy_id = 1;';
                    $result = $con->query($prompt);
                    while ($row = $result->fetch_assoc() ) {
                        echo '<h2>Rasa: '.$row['rasa'].'</h2>';
                        echo '<p>Data urodzenia: '.$row['data_ur'].'</p>';
                        echo '<p>Oznaczenie miotu: '.$row['miot'].'</p>';
                    };
                ?>
                <hr>
                <h2>Świnki w tym miocie</h2>
                <?php
                    $prompt = 'SELECT DISTINCT s.imie, s.cena, s.opis, r.rasa FROM swinki as s JOIN rasy as r ON s.rasy_id = r.id where s.rasy_id = 1;';
                    $result = $con->query($prompt);
                    while ($row = $result->fetch_assoc() ) {
                        echo '<h3>'.$row['imie'].'-'.$row['cena'].'zł';
                        echo '<p>'.$row['opis'].'</p>';
                    };
                ?>
            </div>
        </div>
        <div class="prawy">
            <h3>Poznaj wszystkie rasy świnek morskich</h3>
            <ol>
                <?php
                    $prompt = 'SELECT rasa from rasy;';
                    $result = $con->query($prompt);
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>".$row['rasa']."</li>";
                    };
                ?>
            </ol>
        </div>
    </main>
    <footer><p>Stronę wykonał: 0101010101010</p></footer>
</body>
</html>