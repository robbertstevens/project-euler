<?php
/**
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
 */

$limit = 4000000;

$first = 1;
$next = 2;


$even = [2];

while(true) {
    $result = $next + $first;

    if ($result > $limit) {
        break;
    }
    if ( $result % 2 == 0) {
        $even[] = $result;
    }

    $first = $next;
    $next = $result;
}

echo array_sum($even);