<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css" />
</head>
<body>
    <section class="header">
        <section class="lewy"><img src="../logo1.png" alt="lipiec"></section>
        <section class="prawy">
            <h1>TERMINARZ</h1>
            <br>
            <?php
                $con = mysqli_connect("localhost","root","","terminarz");
                $prompt = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07' and wpis IS NOT NULL;";
                $result = $con->$prompt;
                while ($row = $result->fetch_assoc()) {
                    echo 'Najbliższe zadania: '.$row['wpis'];
                };
            ?>
        </section>
    </section>
    <section class="glowny">
        <?php
            $prompt = "SELECT dataZadania, wpis FROM zadania where miesiac = 'lipiec';";
            $result = $con->$prompt;
            while ($row = $result->fetch_assoc()){
                echo 
                "
                <section class='zadanie'>
                    <h6>".$row['dataZadania']."</h6>
                    <p>".$row['wpis']."</p>
                </section>
                ";
            }
            $con->close();
        ?>
    </section>
    <section class="stopka">
        <a href="sierpien.html">Terminarz na sierpień</a>
        <br>
        <p>Stronę wykonał: Ja</p>
    </section>
</body>
</html>