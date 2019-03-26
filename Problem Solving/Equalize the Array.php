<?php

// Complete the equalizeArray function below.
function equalizeArray($arr)
{
    $count = 0;
    $numbers = [];
    foreach ($arr as $number) {
        if (isset($numbers[$number])) {
            $numbers[$number]++;
        } else {
            $numbers[$number] = 1;
        }
    }

    $maxValue = array_search(max($numbers), $numbers, false);

    foreach ($arr as $number) {
        if ($number !== $maxValue) {
            $count++;
        }
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = equalizeArray($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
