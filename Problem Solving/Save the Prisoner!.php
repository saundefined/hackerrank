<?php

/**
 * @title Save the Prisoner!
 * @link https://www.hackerrank.com/challenges/save-the-prisoner
 * @status solved
 */

// Complete the saveThePrisoner function below.
function saveThePrisoner($n, $m, $s) {
    return ((($s + $m - 2) % $n) + 1);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nms_temp);
    $nms = explode(' ', $nms_temp);

    $n = intval($nms[0]);

    $m = intval($nms[1]);

    $s = intval($nms[2]);

    $result = saveThePrisoner($n, $m, $s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
