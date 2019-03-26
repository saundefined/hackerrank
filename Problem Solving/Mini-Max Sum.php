<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr)
{
    $allSums = [];
    for ($i = 0; $i < count($arr); $i++) {
        $tmpArray = $arr;
        unset($tmpArray[$i]);
        $allSums[] = array_sum($tmpArray);
    }

    print min($allSums) . ' ' . max($allSums);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);