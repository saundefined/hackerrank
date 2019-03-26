<?php

// Complete the twoStrings function below.
function twoStrings($s1, $s2)
{
    $s1 = str_split($s1);
    $s2 = str_split($s2);


    return count(array_intersect($s1, $s2)) > 0 ? 'YES' : 'NO';
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s1 = '';
    fscanf($stdin, "%[^\n]", $s1);

    $s2 = '';
    fscanf($stdin, "%[^\n]", $s2);

    $result = twoStrings($s1, $s2);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
