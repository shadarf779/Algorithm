<?php 
function mergeSort($arr) {
    $length = count($arr);
    
    if ($length <= 1) {
        return $arr;
    }
    
    // Split the array in half
    $mid = (int)($length / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    
    // Recursively sort both halves
    $left = mergeSort($left);
    $right = mergeSort($right);
    
    // Merge the sorted halves
    $result = merge($left, $right);
    
    return $result;
}

function merge($left, $right) {
    $result = [];
    
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }
    
    return $result;
}

// Example usage:
$arr = [34,52,80,75,7,4,2,9,12,14,3,1,16,10,0,54,8];
$sortedArray = mergeSort($arr);
print_r($sortedArray);



