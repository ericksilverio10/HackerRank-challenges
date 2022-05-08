<?php

function compareTriplets($a, $b) {
    $pointsA = 0;
    $pointsB = 0;
    $placar = [];
    if(count($a) == count($b)){
        for($i = 0; $i < count($a); $i++){
            if($a[$i] > $b[$i]){
                $pointsA++;
            } else if($a[$i] < $b[$i]){
                $pointsB++;
            } else{
                $pointsA = 0;
                $pointsB = 0;
            }
        }
    } 
    array_push($placar, $pointsA);
    array_push($placar, $pointsB);
    return $placar;
}

$playerA = [1,2,3];
$playerB = [1,2,3];

compareTriplets($playerA,$playerB);