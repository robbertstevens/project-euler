<?php
/**
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */

$sum = 0;
$limit = 1000;

for ($number = 1; $number < $limit; $number++) {
    if (!$number % 3|| !$number % 5) {
        $sum += $number;
    }
}

echo $sum;