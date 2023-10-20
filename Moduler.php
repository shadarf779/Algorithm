<?php
    function fast_moduler($x , $n , $m){
        if($n==0){
            return 1;
        }else if ($n%2==0){
            $result= fast_moduler($x , $n/2 , $m);
            return ($result * $result)%$m;

        }else{
            return ((($x%$m)*fast_moduler($x , $n-1,$m)%$m));
        }
    }
    
    function Binary_search($a, $left , $right , $x){
        $m = (int) ($right + $left)/2;
        if($left>$right){
            return 0;
        }else{
        if($x==$a[$m]) {
            return $m;
        }
        if($x >$a[$m]){
            return Binary_search($a, $m+1,$right,$x);
        }else{
            return Binary_search($a,$left,$m-1,$x);
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = fast_moduler(3,100,15);
        echo "result is $a";
        $arr = [1,3,5,6,7,9,10,11,12,14,15,17,18,21,22,23,24,27,28];
        $x=9;
        echo "<br>";
        $b = Binary_search($arr,0, Count($arr),$x);
        echo "the Index of Numbner $x id loacted in $b";
    ?>
</body>
</html>