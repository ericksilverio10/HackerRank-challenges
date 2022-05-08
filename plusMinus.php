<?php

function plusMinus($arr) {
    // Write your code here
    $n = count($arr);
    $negatives = 0;
    $positives = 0;
    $zeros = 0;
    $output = [];
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] < 0){
            $negatives++;
        } else if($arr[$i] > 0){
            $positives++;
        } else{
            $zeros++;
        }
    }
    $razao_positivos = number_format((float)($positives / $n), 6, '.', '');
    $razao_negativos = number_format((float)($negatives / $n), 6, '.', '');
    $razao_zeros = number_format((float)($zeros / $n), 6, '.', '');

    print($razao_positivos . "\n" . $razao_negativos . "\n" . $razao_zeros);
}

$numeros = [-4, 3, -9, 0, 4, 1];
plusMinus($numeros);