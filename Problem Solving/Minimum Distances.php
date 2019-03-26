<?php

// Complete the minimumDistances function below.
function minimumDistances($a)
{
    $result = [];
    foreach ($a as $k => $number) {
        $result[$number][] = $k;
    }

    $min = -1;
    foreach ($result as $line) {
        if (count($line) !== 2) {
            continue;
        }
        $l = abs($line[0] - $line[1]);
        if ($min < 0 || $l < $min) {
            $min = $l;
        }
    }

    return $min;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = minimumDistances($a);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
