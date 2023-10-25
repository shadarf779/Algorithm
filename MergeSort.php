<?php 
function mergeSort($arr) {
    $length = count($arr);
    $mid = (int)($length / 2);
    $n=$length - $mid;
    if ($length < 2) {
        return $arr;
    }else
    {
        for ($i = 0;$i<$mid;$i++){
            $left[$i]= $arr[$i];
        }
        for ($i = 0;$i<$n;$i++){
            $right[$i]= $arr[$mid];
            $mid++;
        }
    }
    

    ?>
    <table style="width: 100%;" >
        <tr >
            <td style="width: 45%;">
<?php  print_r($left);?>
            </td>
            <td style="width: 10%;">
                
            </td>
            <td style="width: 45%;">
<?php  print_r($right);?>
                
            </td>
        </tr>
    </table>
<?php

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
print_r($arr);
echo "<br>";
$sortedArray = mergeSort($arr);
print_r($sortedArray);



