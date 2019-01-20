<?php

if(isset($_POST["login"])){
    $userMessage =  "Welcome " . $_POST["login"] . "<br>";

    session_start();
    $_SESSION["userMessage"] = $userMessage;
}

require('page2.html');
