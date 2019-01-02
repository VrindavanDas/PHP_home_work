<?php

/*----------------Test data----------------*/
$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];
$maxLimit = 32;
$fibonacciNumber = 20;

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

            /*array_push($resultArr, $testArr[$i]);*/
            $resultArr[] = $testArr[$i];
        }
    }

    var_dump($resultArr);
}

function task2FibonacciSequence($n) {
    $fib = [0, 1];

    for ($i=1; $i < ($n - 1); $i++) {
        $fib[] = $fib[$i] + $fib[$i - 1];
    }

    var_dump($fib);
}

/*----------------Testing the tasks----------------*/
echo "task 0 result:";
echo "\n";
task0MaxElement($myArray);
echo "\n\n";
echo "task 1 result:";
echo "\n";
task1PositiveNumbers($myArray, $maxLimit);
echo "\n\n";
echo "task 2 result:";
echo "\n";
task2FibonacciSequence($fibonacciNumber);
echo "\n\n";

?>