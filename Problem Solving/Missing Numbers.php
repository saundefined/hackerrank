<?php

// Complete the missingNumbers function below.
function missingNumbers($arr, $brr)
{
    $acount = [];
    foreach ($arr as $number) {
        if (isset($acount[$number])) {
            $acount[$number]++;
        } else {
            $acount[$number] = 1;
        }
    }

    $bcount = [];
    foreach ($brr as $number) {
        if (isset($bcount[$number])) {
            $bcount[$number]++;
        } else {
            $bcount[$number] = 1;
        }
    }

    $result = [];
    foreach ($acount as $number => $count) {
        if (!isset($bcount[$number]) || $bcount[$number] !== $count) {
            $result[$number] = $number;
        }
    }

    foreach ($bcount as $number => $count) {
        if (!isset($acount[$number]) || $acount[$number] !== $count) {
            $result[$number] = $number;
        }
    }

    sort($result);

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%d\n", $m);

fscanf($stdin, "%[^\n]", $brr_temp);

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = missingNumbers($arr, $brr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
