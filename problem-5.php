<?php
/**
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 */
$counter = 1;

while (true) {
    for($divider = 1;$divider < 21;$divider++) {
        if ($counter % $divider != 0) {
            break;
        }

        if ($divider == 20) {
            echo $counter;
            die();
        }
    }
    $counter++;
}

