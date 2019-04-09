<?php

// Complete the isValid function below.
function isValid($s)
{
    $excess = 0;
    $split = str_split($s);
    $values = array_count_values($split);

    $total = [];
    $tmp = array_values($values);
    foreach ($tmp as $count) {
        if (isset($total[$count])) {
            $total[$count]++;
        } else {
            $total[$count] = 1;
        }
    }

    arsort($total);
    $maxCount = key($total);

    foreach ($values as $letter => $count) {
        if (abs($count - $maxCount) > 0) {
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
