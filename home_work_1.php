<?php

/*----------------Test data----------------*/
$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];
$maxLimit = 32;

/*----------------Tasks resolve----------------*/
function task0MaxElement($testArr) {
    $maxValue = 0;

    for ($i=0; $i<count($testArr); $i++) {

        if ($testArr[$i] >= $maxValue) {
            $maxValue = $testArr[$i];
        }
    }

    echo "$maxValue";
}

function task1PositiveNumbers($testArr, $limit) {
    $resultArr = [];

    for ($i=0; $i<count($testArr); $i++) {

        if (
            ($testArr[$i] >= 0) &&
            (($testArr[$i] % 2) === 0) &&
            ($testArr[$i] < $limit)
        ){

            array_push($resultArr, $testArr[$i]);
        }
    }

    /*echo $resultArr;*/
    var_dump($resultArr);
}

/*----------------Tasks test----------------*/
task0MaxElement($myArray);
task1PositiveNumbers($myArray, $maxLimit);


?>