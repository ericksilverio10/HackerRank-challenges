<?php

function diagonalDifference($arr) {
    // Write your code here
    $l2r = 0;
    $r2l = 0;
    for($i = 0; $i < count($arr); $i++){
        $l2r += $arr[$i][$i];
        $r2l += $arr[$i][count($arr) - 1 - $i];
    }
    return abs($l2r - $r2l);
}

$matriz = [
    [9, 2, 3],
    [2, 6, 1],
    [9, 1, 2]
];
echo diagonalDifference($matriz);