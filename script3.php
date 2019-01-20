<?php

$filename = "upload/test.txt";

echo "file path: " . realpath($filename) . "<br>";
echo "file size: " . filesize($filename). " bites <br>";
echo "file name: " . basename($filename) . "<br>";
echo "file length: " . count(file($filename)) . "<br>";
echo "file text: " . file_get_contents($filename) . " <br>";