<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$array = [6,2,12,10,5,4,1,8,7,9];


$pivot = $array[0];
print('Pivot : '.$pivot);
$n=0;
for($i = 0; $i < count($array) ;$i++){
    if ($array[$i] <$pivot){

        $n++;
    }
}
print ('<br>');
print ('n value : '.$n);

print ('<br>');
print ('<br>');
print ('<hr>');

// $array = [6,2,12,10,5,4,1,8,7,9];
$emp_num = [];
$emp_num[$n]=$pivot;

print_r($emp_num);
print ('<hr>');

$x=0;
for($i = 0; $i < count($array);$i++){
    if ($array[$i] <$pivot){

        $emp_num[$x]=$array[$i];
        echo($emp_num[$x++]);
    }
}

print ('<hr>');

print_r($emp_num);
$x=$n;
print ('<hr>');


for($i = 0; $i < count($array);$i++){
    if ($array[$i] >$pivot){
        $x++;
        $emp_num[$x]=$array[$i];
    }
}
print ('<hr>');

print_r($emp_num);
print ('<hr>');



for($i = 0; $i < count($array);$i++){
    echo($emp_num[$i].' , ');
}
print ('<hr>');

echo ($n);
print ('<hr>');

echo (count($array)-$n-1);
























// bubbleSort($array);
function bubbleSort($array){
    $count = count($array);
    for($i=0;$i<$count;$i++){
        for($j=0;$j<$count-1;$j++){
            if($array[$j]>$array[$j+1]){
                $temp = $array[$j+1];
                $array[$j+1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    print_r($array);
}

?>

</body>
</html>