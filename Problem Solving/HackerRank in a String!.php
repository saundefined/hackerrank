<?php

/**
 * @title HackerRank in a String!
 * @link https://www.hackerrank.com/challenges/hackerrank-in-a-string
 * @status solved
 */

// Complete the hackerrankInString function below.
function hackerrankInString($s) {
    $word = 'hackerrank';
    foreach (str_split($s) as $letter) {
        if ($letter === $word[0]) {
            $word = substr($word, 1);
        }
    }

    return strlen($word) > 0 ? 'NO' : 'YES';
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = hackerrankInString($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
