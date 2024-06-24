<?php
$numbers = array(
    0 => 12,
    1 => 45,
    2 => 10,
    3 => 25
);

// Calculate the sum of the array elements
$sum = array_sum($numbers);

// Calculate the average of the array elements
$count = count($numbers);
$avg = $sum / $count;

// Sort the array in reverse order (highest to lowest)
arsort($numbers);

// Display the sum and average
echo "Sum of the array elements: " . $sum . "<br>";
echo "Average of the array elements: " . $avg . "<br>";

// Display the sorted array
echo "Sorted array (highest to lowest): <br>";
foreach ($numbers as $index => $value) {
    echo "Index $index: $value<br>";
}