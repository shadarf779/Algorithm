
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = [34,52,80,75,7,4,2,9,12,14,3,1,16,10,0,54,8];
        $n=Count($arr);
        echo ("ARRAY SIZE IS ".$n);
        echo ("<br>");
        echo ("In Selection Sort we need N^2 to be Sorted : " . $n*$n);
        echo ("<br>");
        print_r($arr);
        echo ("<br>");
        $count=0;
        $SWAP=0;
        for ($i=1; $i<$n-1;$i++)
        {
            
            print($count++. " , ");
         
            for($j=$i ; $j > 0 ;$j--)
            {               
            print($count++. " , ");

                if($arr[$j-1]>$arr[$j]){
                    print(" ,".$SWAP++. "SWAPED, ");
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j-1];
                    $arr[$j-1] = $temp;
                }
            }
            //swap the found minimum element with first element of unsorted array
            print("<br>");
        }
        print_r($arr);
    ?>

</body>
</html>