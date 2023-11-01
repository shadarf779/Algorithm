<?php 
// Quick Sort

function quickSort(&$arr, $left, $right) {
    if ($left < $right) {
        $pivotIndex = partition($arr, $left, $right);
        quickSort($arr, $left, $pivotIndex - 1);
        echo $left;
        echo " Done 
        $right
        <br>";
        quickSort($arr, $pivotIndex + 1, $right);
    }
}

function partition(&$arr, $left, $right) {
    $pivot = $arr[$right];
    $i = $left - 1;
    echo "Pivot : ".$pivot."<br>";
    for ($j = $left; $j < $right; $j++) {
        if ($arr[$j] <= $pivot) {
            $i++;
            print_r($arr);
            echo "<br>";
            swap($arr, $i, $j);
        }
    }

    print_r($arr);
    echo "<hr>";

    swap($arr, $i + 1, $right);
    return $i + 1;
}

function swap(&$arr, $i, $j) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

// Example usage:
$arr = [34, 52, 80, 75, 7, 4, 2, 9, 12, 14, 3, 1, 16, 10, 0, 54, 8];
print_r($arr);
echo "<br>";

$length = count($arr);
quickSort($arr, 0, $length - 1);
print_r($arr);


