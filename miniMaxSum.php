<?php

function miniMaxSum($arr) {
    // Write your code here
    sort($arr);
    $output = [];
    $soma = array_sum($arr);
    $minSum = $soma - array_pop($arr);
    $maxSum = $soma - $arr[0];
    array_push($output, $minSum);
    array_push($output, $maxSum);

    print($minSum . " " . $maxSum);
}


$num = [1, 2, 3, 4, 5];
miniMaxSum($num);