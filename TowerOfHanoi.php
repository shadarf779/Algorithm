<?php 


function tower_of_hanoi($n, $source, $auxiliary, $target) {
    if ($n === 1) {
        echo "Move disk 1 from $source to $target<br>";
        return;
    }
    tower_of_hanoi($n - 1, $source, $target, $auxiliary);
    echo "Move disk $n from $source to $target <br>";
    tower_of_hanoi($n - 1, $auxiliary, $source, $target);
}

// Example usage
$n = 6;  // Number of disks
tower_of_hanoi($n, 'A', 'B', 'C');



