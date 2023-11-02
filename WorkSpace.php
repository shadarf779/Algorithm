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
    
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Recursively sort both halves

    
    // Merge the sorted halves
    $result = merge($left, $right , $length);
    
    return $result;
}

function merge($left, $right, $length) {
    $result = [];
    $i=0;
    $a =0;
    $b=0;
    ?> 
       <table style="width: 100%;" >
        <tr >
            <td style="width: 40%;">
            <p>Left</p>
<?php  print_r($left);?>
            </td>
          
            <td style="width: 40%;">
            <p>Right</p>
<?php  print_r($right);?>
                
            </td>
        </tr>
    </table>
    <?php
    while($i < $length  )
    {
        if($a<Count($left) && $b<Count($right))
        {
            if($left[$a] < $right[$b])
            {
                $result[$i]=$left[$a];
             echo " $left[$a] vs $right[$b] <br>";

             echo  $result[$i];
             echo " , Left Smaller <br>";
                $a++;
                
            }else
            {
                $result[$i]=$right[$b];
             echo " $left[$a] vs $right[$b] <br>";

                echo  $result[$i];
                echo " , Right Smaller <br>";
                $b++;
            }
        }else if($a == Count($left) && $b< count($right) )
        {
            $result[$i] = $right[$b];
            
            echo  $result[$i];
            echo " , Left is EMTY <br>";
            $b++;
        }else if ($b == Count($right) && $a< count($left))
        {
            $result[$i] = $left[$a];
            echo  $result[$i];
            echo " , Right Is MT <br>";
            $a++;
        }
        $i++;
    }
    
    ?>
 
    <table style="width: 80%;" >
        <tr >
           
          
            <td style="width: 40%;">
            <p>ALL</p>
<?php  print_r($result);?>
                
            </td>
        </tr>
    </table>
<?php
    return $result;
}

// Example usage:
$arr = [34,52,80,75,7,4,2,9,12,14,3,1,16,10,0,54,8];
print_r($arr);
echo "<br>";
$sortedArray = mergeSort($arr);



