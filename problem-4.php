<?php
/**
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */


function isPalindrome($number) {
    $orig = $number;

    $palindrome = 0;
    while($number >= 1) {
        $remainder = $number % 10;
        $palindrome = $palindrome * 10 + $remainder;
        $number = $number / 10;
    }
    if ($orig === $palindrome) {
        return true;
    }

    return false;
}

$largest = 0;

for($left = 1; $left < 1000; $left++) {
    for($right = 1; $right < 1000; $right++) {
        $sum = $left * $right;
        if(!isPalindrome($sum)) {
            continue;
        }
        if($sum > $largest) {
            $largest = $sum;
        }
    }
}

echo $largest;