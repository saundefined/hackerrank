<?php

// Complete the isValid function below.
function isValid($s)
{
    $excess = 0;
    $letters = [];
    foreach (str_split($s) as $letter) {
        if (isset($letters[$letter])) {
            $letters[$letter]++;
        } else {
            $letters[$letter] = 1;
        }
    }

    $total = [];
    $letters = array_values($letters);
    foreach ($letters as $count) {
        if (isset($letters[$letter])) {
            $total[$count]++;
        } else {
            $total[$count] = 1;
        }
    }

    arsort($total);
    $maxCount = key($total);

    foreach ($letters as $count) {
        if ($count !== $maxCount) {
            $excess++;
        }
    }

    return $excess > 1 ? 'NO' : 'YES';
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = isValid($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
