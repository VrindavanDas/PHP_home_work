<?php

/*----------------Test data----------------*/
$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];
$maxLimit = 32;
$fibonacciNumber = 20;
$replaceNumber = 40;
$searchValue = 5;
$asArray1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "black", "e" => "orange"];
$asArray2 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "pink"];


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

function arrayDif ($array1, $array2) {
    $resultArr = [];

    foreach ($array1 as $value1) {
        $allowPush = true;

        foreach ($array2 as $value2){

            if ($value1 === $value2) {
                $allowPush = false;
                continue;
            }

        }

        if($allowPush) {
            $resultArr[] = $value1;
        }

    }

    return $resultArr;

}

function sort ($array) {

    for ($i=0; $i<count($array); $i++) {

        for ($k=$i+1; $i<count($array); $k++) {

            if ($array[$i]>$array[$k]) {

                $value = $array[$k];
                $array[$k] = $array[$i];
                $array[$i] = $value;

            }

        }
    }
    return $array;
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

$difArr = arrayDif($asArray1, $asArray2);
echo "task 6 result:";
var_dump($difArr);
echo "\n\n";

sort($myArray);
echo "task 7 result: \n";
var_dump($myArray);
echo "\n\n";


?>



