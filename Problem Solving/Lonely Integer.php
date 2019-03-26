<?php

// Complete the lonelyinteger function below.
function lonelyinteger($a)
{
    $result = [];
    foreach ($a as $item) {
        if (isset($result[$item])) {
            $result[$item]++;
        } else {
            $result[$item] = 1;
        }
    }

    $result = array_filter($result, function ($item) {
        return $item % 2 !== 0;
    });

    return key($result);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
