<?php

if(
    (isset($_POST['userName'])) &&
    (isset($_POST['userAge'])) &&
    ($_POST['userName'] === '') &&
    ($_POST['userAge'] === '')
) {

    $userName = $_POST['userName'];
    $userAge = $_POST['userAge'];

    echo "Hi user: ". $userName . " your age is: " . $userAge;
} else {
    echo "Error";
}
