<?php 


function tower_of_hanoi($n, &$source, &$auxiliary, &$target) {
    if ($n === 1) {
        $disk = array_pop($source);
        array_push($target, $disk);
        echo "Move disk $disk from Source to Target<br>";
        return;
    }

    tower_of_hanoi($n - 1, $source, $target, $auxiliary);
    $disk = array_pop($source);
    array_push($target, $disk);
    echo "Move disk $disk from Source to Target<br>";
    tower_of_hanoi($n - 1, $auxiliary, $source, $target);
}

// Example usage
$source = [5, 4, 3, 2, 1];
$auxiliary = [];
$target = [];

// Output the final state of source and target pegs
echo "Source Peg: " . implode(", ", $source) . "<br>";
echo "Target Peg: " . implode(", ", $target) . "<br>";
$n = count($source);
tower_of_hanoi($n, $source, $auxiliary, $target);

// Output the final state of source and target pegs
echo "Source Peg: " . implode(", ", $source) . "<br>";
echo "Target Peg: " . implode(", ", $target) . "<br>";




