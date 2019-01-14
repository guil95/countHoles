<?php

function countHoles($num) {
    $numeros = [1,0,0,0,1,0,1,0,2,1];
    $numArr = str_split($num);
    $sumHoles = 0;
    
    for($i = 0; $i < count($numArr); $i++){
        $sumHoles += $numeros[$numArr[$i]];
    }
    
    return $sumHoles;
}
