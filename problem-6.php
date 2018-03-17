<?php
/**
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */

$sumOfSquares = 0;
$squareOfSum = 0;
$limit = 100;
for ($numbers = 1; $numbers <= $limit; $numbers++)
{
    $sumOfSquares += $numbers ** 2;
    $squareOfSum += $numbers;
}
echo ($squareOfSum ** 2) - $sumOfSquares;