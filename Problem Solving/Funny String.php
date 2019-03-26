<?php

// Complete the funnyString function below.
function funnyString($s)
{
    $first = [];
    $second = [];

    $array = str_split($s);
    foreach ($array as $k => $letter) {
        if ($letter && isset($array[$k + 1])) {
            $first[] = abs(ord($letter) - ord($array[$k + 1]));
        }
    }

    $array = array_reverse(str_split($s));
    foreach ($array as $k => $letter) {
        if ($letter && isset($array[$k + 1])) {
            $second[] = abs(ord($letter) - ord($array[$k + 1]));
        }
    }

    return count(array_diff_assoc($first, $second)) > 0 ? 'Not Funny' : 'Funny';
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = funnyString($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
