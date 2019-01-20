<?php


if ($_FILES["file"]["error"][0] || $_FILES["file"]["error"][1] || $_FILES["file"]["error"][2]) {
    echo "Files not uploaded!";
} else {
    echo "File successfully loaded!" . $_FILES["file"]["name"][0] . "<br>";
    echo "File successfully loaded!" . $_FILES["file"]["name"][1] . "<br>";
    echo "File successfully loaded!" . $_FILES["file"]["name"][2] . "<br>";
}