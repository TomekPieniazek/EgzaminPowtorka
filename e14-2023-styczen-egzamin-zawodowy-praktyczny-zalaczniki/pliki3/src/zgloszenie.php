<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
        $conn = new mysqli('localhost', 'root', '', 'baza');
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        

        $lowisko = htmlspecialchars($_POST["lowisko"]);
        $data = htmlspecialchars($_POST["data"]);
        $sedzia = htmlspecialchars($_POST["sedzia"]);

        $conn->execute_query("INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (0, $lowisko, $data, $sedzia);");
        $conn->close();
    }

?>
