
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
        for ($i=0; $i<$n-1;$i++)
        {
            $minIndex=$i;
            
            print($count++. " , ");

            for($j=$i+1 ; $j <$n;$j++)
            {                
                if($arr[$j]<$arr[$minIndex] ){
                    $minIndex  = $j;
                }
                
                print($count++. " , ");
            }
            echo("Swaped");
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$minIndex];
                    $arr[$minIndex] = $temp;
            print("<br>");
        }
        print_r($arr);
    ?>

</body>
</html>