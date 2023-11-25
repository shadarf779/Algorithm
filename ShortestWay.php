<?php
function shortest_job($jobs , $process)
{
    $short_job=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    for ($i=0;$i<count($jobs);$i++)
    {   
        $index_small = min_index();
        
        $short_job[$index_small] += $jobs[$i];
    }
    for($i=0;$i<count($short_job);$i++)
    {

    }
}

function Max_value($jobs )
{
    $max = 0 ;
    for($i=0; $i<count($jobs);$i++)
    {
        if($jobs[$i]<$max)
        {
            $max=$i;
        }
    }

}
function min_index($jobs )
{
    $min = 0 ;
    for($i=0; $i<count($jobs);$i++)
    {
        if($jobs[$i]<$jobs[$min])
        {
            $min=$i;
        }
    }
}


$jobs = [3,5,6,10,11,14,15,18,20];
$process = 3;
shortest_job($jobs , $process);