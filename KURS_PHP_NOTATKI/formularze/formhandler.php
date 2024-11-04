<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["message"]);
    echo $firstName;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
} else {
    echo ":3";
}