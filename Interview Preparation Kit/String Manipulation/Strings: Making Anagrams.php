<?php

/**
 * @title Strings: Making Anagrams
 * @link https://www.hackerrank.com/challenges/ctci-making-anagrams
 * @status solved
 */

// Complete the makeAnagram function below.
function makeAnagram($a, $b) {
    $a = str_split($a);
    $b = str_split($b);

    $a = array_count_values($a);
    $b = array_count_values($b);

    $error = 0;
    foreach ($a as $letter => $count) {
        if (isset($b[$letter])) {
            $error += abs($count - $b[$letter]);
            unset($b[$letter]);
        } else {
            $error += $count;
        }
    }

    return $error + array_sum($b);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$a = '';
fscanf($stdin, "%[^\n]", $a);

$b = '';
fscanf($stdin, "%[^\n]", $b);

$res = makeAnagram($a, $b);

fwrite($fptr, $res . "\n");

fclose($stdin);
fclose($fptr);
