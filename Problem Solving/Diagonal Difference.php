<?php

/**
 * @title Diagonal Difference
 * @link https://www.hackerrank.com/challenges/diagonal-difference
 * @status solved
 */

// Complete the diagonalDifference function below.
function diagonalDifference($arr) {
    $first = 0;
    $second = 0;
    $count = count($arr);

    $firstIterator = 0;
    $secondIterator = $count - 1;
    for ($i = 0; $i < $count; $i++) {
        $first += $arr[$i][$firstIterator];
        $second += $arr[$i][$secondIterator];
        $firstIterator++;
        $secondIterator--;
    }

    return abs($first - $second);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr = [];

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
