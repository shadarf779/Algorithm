<?php


function Money_Exchange($coins , $n )
{
    
    
    $m=$n;
    $num_coin=0;
    $nums =[0,0,0,0];
    $i=0;
    while($n!=0)
    {
        echo ("$n ,$coins[$i]  | ");
        if($n>=$coins[$i])
        {
           
            $n = $n - $coins[$i];
            $nums[$i] +=1;
            $num_coin +=1;

        }else
        {
            $i++;
        }
    }
    echo ("Total Number of coins =$num_coin <br>");
    echo ("Total Number of return =$m <br>");
    echo ("Total Number of coins =$num_coin <br>");
    echo ("Total Number of coins =$num_coin <br>");


}

$arr=[25,10,5,1];
Money_Exchange($arr , 72);
