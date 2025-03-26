<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <section class="header"><h1>BIURO PODRÓŻY</h1></section>
    <div class="main_box">
        <section class="lewy">
            <h2>Promocje</h2>
            <table>
                <tbody>
                    <tr>
                        <td>Warszawa</td>
                        <td>od 600zł</td>
                    </tr>
                    <tr>
                        <td>Wenecja</td>
                        <td>od 1200zł</td>
                    </tr>
                    <tr>
                        <td>Paryż</td>
                        <td>od 1200zł</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="srodkowy">
            <h2>W tym roku jedziemy do...</h2>
            <?php
                $con = mysqli_connect("localhost","root","","podroze");
                $prompt = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";
                $result = mysqli_query($con, $prompt);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<img src='../pliki/".$row['nazwaPliku']."' alt='".$row['podpis']."'>";
                }
                mysqli_close($con);
            ?>
        </section>
        <section class="prawy">
            <h2>Kontakt</h2>
            <a href="mailto:biuro@wycieczki.pl">Napisz do nas</a>
            <p>telefon: 444555666</p>
        </section>
    </div>
    <section class="dane">
        <h3>W poprzednich latach byliśmy...</h3>'
        <ol>
            <?php
                $con = mysqli_connect("localhost","root","","podroze");
                $prompt = "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = 0;";
                $result = mysqli_query($con, $prompt);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<li>Dnia: ".$row["dataWyjazdu"]." pojechaliśmy do ".$row["cel"]."</li>";
                };
                mysqli_close($con);
            ?>
        </ol>
    </section>
    <section class="stopka">
        <p>Stronę wykonał: 010101010101010</p>
    </section>
</body>
</html>