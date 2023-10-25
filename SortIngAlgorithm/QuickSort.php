<?php 

function QuikSort($arr) {
    $length = count($arr);
    $mid = (int)($length / 2);
    $n=$length - $mid;
    $Pivot=0;
    if ($length < 2) {
        return $arr;
    }else
    {
        for ($i=1;$i < $length;$i++){
            if($arr[$Pivot] > $arr[$i])
            {
                $arr[$Pivot] = $arr[$i];
                $Pivot++;
            }
        }
    }

   
    return $result;
}


// Example usage:
$arr = [34,52,80,75,7,4,2,9,12,14,3,1,16,10,0,54,8];
print_r($arr);
echo "<br>";
$sortedArray = QuikSort($arr);



