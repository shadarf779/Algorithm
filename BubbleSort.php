
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

        echo ("ARRAY SIZE IS ".Count($arr));
        echo ("<br>");
        echo ("In Bubble Sort we need N^2 to be Sorted" . Count($arr)*Count($arr));
        echo ("<br>");
        $SWAP = 0;
        $count=0;
        for ($i=Count($arr)-1 ; $i>0;$i--)
        {
            print($count++. " , ");

            for($j=0 ; $j <$i;$j++)
            {                
                if($arr[$j]>$arr[$j+1]){
                    
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                        
                    print(" ,".$SWAP++. "SWAPED, ");
                }
                
                print($count++. " , ");
            }
            print("<br>");
        }
        print_r($arr);
    ?>

</body>
</html>