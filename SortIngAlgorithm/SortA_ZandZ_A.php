<?php
$array = [5, 2, 8, 1, 9, 4, 3, 7];

// Calculate the midpoint of the array
$midpoint = count($array) / 2;

// Split the array into two parts
$first_half = array_slice($array, 0, $midpoint);
$second_half = array_slice($array, $midpoint);

// Sort the first half in ascending order
sort($first_half);

// Sort the second half in descending order
rsort($second_half);

// Combine the two sorted halves
$sorted_array = array_merge($first_half, $second_half);

// Print the sorted array
print_r($sorted_array);
?>
