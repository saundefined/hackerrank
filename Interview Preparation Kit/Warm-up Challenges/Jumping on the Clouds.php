<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c)
{
    $steps = 0;
    $current = 0;

    foreach ($c as $k => $cloud) {
        if ($k <= $current) {
            continue;
        }

        if ($c[$current + 2] === 1) {
            $current++;
        } else {
            $current += 2;
        }

        $steps++;
    }

    return $steps;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
