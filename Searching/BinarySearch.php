<?php 

function Binary_search($arr ,$first , $arraySize , $target){
    if($first>$arraySize )
    {
        return false;
    }
    $med = intdiv($arraySize+$first,2);
    print_r ($arr);
    echo "<br>first $first, End : $arraySize, Target : $target";
    echo "<br>".$arr[$med]."<br>";
    echo "$arr[$med] == $target<br>";
    if($arr[$med] == $target){
        return true;
    }elseif($arr[$med] < $target)
    {
        echo "first";
        return Binary_search($arr , $med+1 ,$arraySize , $target);

    }elseif ($arr[$med] > $target)
    {
        return Binary_search($arr , $first ,$med-1 , $target);

    }

    
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequential Search</title>
</head>
<body>
    <?php
        $arr = [0 ,1 ,2 ,3 ,4 ,7 ,8, 9,10  ,12, 14,16, 34 ,52,54,75,80];
        $arraySize = count($arr);
        $target = 8;
        $found = false;

        echo "ARRAY SIZE IS " . $arraySize . "<br>";
        echo "In Sequential Search Sort we need N to be Searched: " . $target . "<br>";
        print_r($arr);
        echo "<br>";

        $found = Binary_search($arr ,0, $arraySize , $target);
        
        if ($found) {
            echo "Target Found";
        } else {
            echo "Target Not Found";
        }
    ?>
</body>
</html>
