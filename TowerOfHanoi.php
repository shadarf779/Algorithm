<?php 


function tower_of_hanoi($n, &$A, &$B, &$C) {
    if ($n === 1) {
        $disk = array_pop($A);
        array_push($C, $disk);
        echo "Move disk $disk from A to C<br>";
        return;
    }

    tower_of_hanoi($n - 1, $A, $C, $B);
    $disk = array_pop($A);
    array_push($C, $disk);
    echo "Move disk $disk from A to C<br>";
    tower_of_hanoi($n - 1, $B, $A, $C);
}

// Example usage
$A = [5, 4, 3, 2, 1];
$B = [];
$C = [];

// Output the final state of A and C pegs
echo "A Peg: " . implode(", ", $A) . "<br>";
echo "C Peg: " . implode(", ", $C) . "<br>";
$n = count($A);
tower_of_hanoi($n, $A, $B, $C);

// Output the final state of A and C pegs
echo "A Peg: " . implode(", ", $A) . "<br>";
echo "C Peg: " . implode(", ", $C) . "<br>";




