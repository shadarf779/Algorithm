<?php 

function QuikSort($arr) {
    $length = count($arr);
    $mid = (int)($length / 2);
    $n=$length - $mid;
    $Pivot=$arr[0];
    $i=0;
    $j=Count($arr);
    if ($length < 2) {
        return $arr;
    }else
    {
        while ($i == Count($arr))
        {
            if($arr[$i]<$arr[$j])
            {
                $j--;
            }else if($arr[$i]<$arr[$i+1])
            {
                $temp = $arr[$i+1];
                $arr[$i+1] = $arr[$i];
                $arr[$i] = $temp;
            }elseif($arr[$i]>$arr[$i+1])
            {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
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



