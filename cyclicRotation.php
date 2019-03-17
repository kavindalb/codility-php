<?php
var_dump(solution([3, 8, 9, 7, 6], 3));
function solution($A, $K) {
    // write your code in PHP7.0
    $resultArray = [];
    $arrayLenth = count($A);
    foreach ($A as $i => $v) {
        if (($i+$K) < $arrayLenth) { 
        	$index = $i+$K;
        } else {
            $index = ($i+$K)%$arrayLenth;
        }
        $resultArray[$index] = $v;
    }
    
    return $resultArray;
}