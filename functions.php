<?php
function printArr($numbers){
    foreach ($numbers as $number){
        echo $number.'<br>';
    }
}

function largest($numbers){
    return $largestNum = max($numbers);
}

function removeDups($numbers){
     $result = array_unique($numbers);
     return $result;
}

function distribution($numbers){
    $newArray = array_count_values($numbers);
    ksort($newArray);
    return $newArray;
}