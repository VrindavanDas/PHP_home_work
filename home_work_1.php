<?php

/*----------------Test data----------------*/
$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];
$maxLimit = 32;
$fibonacciNumber = 20;
$replaceNumber = 40;
$searchValue = 5;

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

function task3ReplaceEl ($arr , $value) {
    $resultArr = [];
    $replaceCount = 0;

    for ($i = 0; $i<count($arr); $i++) {

        if ($arr[$i] >= $value) {

            $resultArr[] = $value;
            $replaceCount++;

        } else {
            $resultArr[] = $arr[$i];
        }

    }

    var_dump($resultArr);
    echo $replaceCount;

}

function sumArray ($array) {
    $result = 0;

    for ($i=0; $i<count($array); $i++) {

        $result += $array[$i]; /*$result = $result + $array[$i];*/

    }

    return $result;

}

function inArray ($array, $value){
    $result = false;

    for ($i=0; $i<count($array); $i++) {
        if ($array[$i]===$value) {
            $result = true;

        }

    }
    return $result;
}

/*----------------Testing the tasks----------------*/
echo "task 0 result: \n";
task0MaxElement($myArray);
echo "\n\n";


echo "task 1 result: \n";
task1PositiveNumbers($myArray, $maxLimit);
echo "\n\n";


echo "task 2 result: \n";
task2FibonacciSequence($fibonacciNumber);
echo "\n\n";


echo "task 3 result: \n";
task3ReplaceEl($myArray, $replaceNumber);
echo "\n\n";


$arraySum = sumArray($myArray);
echo "task 4 result: \n $arraySum \n\n";


$arrayIn = inArray($myArray, $searchValue);

if($arrayIn) /*($arrayIn === true)*/ {
    echo "task 5 result: \n true \n\n";
} else {
    echo "task 5 result: \n false \n\n";
}




?>



