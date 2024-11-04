<!DOCTYPE html>
<html>
<head>
    <title>Witryna Zwierzeta</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="zwierzeta.jpg" alt="Zwierzeta">
            <p>Opis obrazu</p>
        </div>
        <div class="right">
            <form action="index.php" method="post">
                <input type="number" name="numer">
                <input type="submit" value="Submit">
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $number = $_POST['numer'];
                    $conn = new mysqli('localhost', 'root', '', 'baza');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $result = $conn->query("SELECT * FROM Zwierzeta WHERE id = $number");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<p>" . $row['gatunek'] . "</p>";
                        }
                    } else {
                        echo "<p>No results found.</p>";
                    }
                    $conn->close();
                }
            ?>
        </div>
    </div>
</body>
</html>
