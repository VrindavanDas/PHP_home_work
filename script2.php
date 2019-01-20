<?php

$testFile = "upload/test.txt";

if (file_exists($testFile)) {
    $text = file($testFile) or die("I am dieing");

    foreach ($text as $key => $value) {
        if ($key > 3 && $key < 10) {
            echo $text[$key] . "<br>";
        }
    }

} else {
    echo "Error";
}
