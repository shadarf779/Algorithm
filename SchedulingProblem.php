<?php

function shortest_job($jobs, $process)
{
    $short_job = array_fill(0, $process, 0);

    for ($i = 0; $i < count($jobs); $i++) {
        $index_small = min_index($short_job);
        $short_job[$index_small] += $jobs[$i];
    }

    print_r($short_job);
}

function max_value($jobs)
{
    $max = 0;

    for ($i = 0; $i < count($jobs); $i++) {
        if ($jobs[$i] > $max) {
            $max = $jobs[$i];
        }
    }

    return $max;
}

function min_index($short_job)
{
    $min = 0;

    for ($i = 0; $i < count($short_job); $i++) {
        if ($short_job[$i] < $short_job[$min]) {
            $min = $i;
        }
    }

    return $min;
}

$jobs = [3, 5, 6, 10, 11, 14, 15, 18, 20];
$process = 3;

shortest_job($jobs, $process);
