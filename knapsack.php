<?php 

function knapsack($n ,$weight , $price ,$Total)
{
    $price_weight = $weight ;

    for ($i=0;$i<count($price_weight);$i++)
    {
        $price_weight[$i] = $price[$i]/$weight[$i];
        echo  $price_weight[$i] ."<br>";
    }
    
    print_r($weight);
    echo("<br>");
    print_r($price);
    echo("<br>");
    print_r($price_weight);
    echo("<br>");
    for($i=0;$i<$n ; $i++)
    {
        for($j=0;$j<$n-1;$j++)
        {
            if($price_weight[$j+1]>$price_weight[$j])
            {
                $temp1 = $price_weight[$j+1];
                $price_weight[$j +1]=$price_weight[$j];
                $price_weight[$j]=$temp1;

                $temp2 = $weight[$j+1];
                $weight[$j +1]=$weight[$j];
                $weight[$j]=$temp2;

                
                $temp3 = $price[$j+1];
                $price[$j +1]=$price[$j];
                $price[$j]=$temp3;
            }
        }
    }
    print_r($price_weight);
    echo("<br>");
    print_r($weight);
    echo("<br>");
    print_r($price);
    echo("<br>");
    $x = [0,0,0];
    $last =0;
    for($i=0;$i<$n;$i++)
    {
        if($weight[$i]<$Total)
        {
            $x[$i]=1;
            $last++;
            $Total = $Total - $weight[$i];
        }
    }
    $x[$last+1]=$Total/$weight[$last+1];
    print_r($x);
    $sum_Price =0;
    $sum_weight = 0;

    for($i=0;$i<$n;$i++)
    {
        $sum_weight += +($weight[$i] *$x[$i] );
        $sum_Price += +($price[$i] *$x[$i] );
    }
    echo('<br>');

    echo($sum_weight);
    echo('<br>');
    echo($sum_Price);
}


$weight = [18,15,10];

$price = [25,24,15];
$c = 20;
$n = count($weight);

knapsack($n ,$weight , $price , $c);
hached