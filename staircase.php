<?php

function staircase($n) {
    // Write your code here
    if(is_integer($n)){
        for($i = 1; $i < $n; $i++){
            return str_repeat(" # ", $i);
        } 
    }
}

echo staircase(6);