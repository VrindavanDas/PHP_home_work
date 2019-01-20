<?php

if (file_exists("user.txt")){
    $reg = fopen ("user.txt", "w+");

    if (isset($_GET['userName']) && isset($_GET['login']) && isset($_GET['password']) && isset($_GET['passwordAgain'])
        && isset($_GET['eMail'])) {

        fwrite($reg, $_GET["userName"]);
        fwrite($reg, $_GET["login"]);
        fwrite($reg, $_GET["password"]);
        fwrite($reg, $_GET["passwordAgain"]);
        fwrite($reg, $_GET["eMail"]);
        fwrite($reg, $_GET["gender"]);
        fwrite($reg, $_GET["dataOfBirth"]);
        fwrite($reg, $_GET["CountryAndSity"]);

    }

    $userData = file("user.txt");
    foreach ($userData as $value) {
        echo $value . "<br>";
    }

    fclose($reg);
} else echo "Error!!";


