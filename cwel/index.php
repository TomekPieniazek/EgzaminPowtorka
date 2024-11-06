<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Test
    <?php
        $con = mysqli_connect("localhost","root","","baza");
        if (mysqli_connect_errno()) {
            printf("Chuj", mysqli_connect_error());
            exit(1);
        }

        $result = mysqli_query($con,"SELECT * FROM podzespoly");
        print_r($result)
    ?>
</body>
</html>

